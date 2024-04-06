<?php
class TLDExtract {
	const SCHEME_RE = '#^([a-zA-Z][a-zA-Z0-9+\-.]*:)?//#';
	const PRIVATE_SECTION_MARKER = '===BEGIN PRIVATE DOMAINS===';

	private $fetch;
	private $cacheFile;
	private $extractor = null;

	public function __construct($fetch = true, $cacheFile = '') {
		$this->fetch = $fetch;
		$this->cacheFile = !empty($cacheFile) ? $cacheFile : dirname(__FILE__) . DIRECTORY_SEPARATOR . '.tld_set';
	}

	public function __invoke($url) {
		return $this->extract($url);
	}

	public function extract($url, $includePslPrivateDomains = false) {
		$host = $this->getHost($url);
		$extractor = $this->getTldExtractor();
		list($registeredDomain, $tld) = $extractor->extract($host, $includePslPrivateDomains);

		//Check for IPv4 and IPv6 addresses.
		if ( empty($tld) && $this->isIp($host) ) {
			return new TLDExtractResult('', $host, '');
		}

		$lastDot = strrpos($registeredDomain, '.');
		if ( $lastDot !== false ) {
			$subdomain = substr($registeredDomain, 0, $lastDot);
			$domain = substr($registeredDomain, $lastDot + 1);
		} else {
			$subdomain = '';
			$domain = $registeredDomain;
		}

		return new TLDExtractResult($subdomain, $domain, $tld);
	}

	private function getHost($url) {
		//Remove scheme and path.
		$host = preg_replace(self::SCHEME_RE, '', $url);
		list($host, ) = explode('/', $host, 2);

		//Remove username and password.
		$pieces = explode('@', $host, 2);
		if ( count($pieces) == 2 ) {
			$host = $pieces[1];
		}

		$closingBracket = strrpos($host, ']');
		if ( $this->startsWith($host, '[') && $closingBracket ) {
			$host = substr($host, 0, $closingBracket + 1);
		} else {
			//This is either a normal hostname or an IPv4 address. Just remove the port.
			list($host, ) = explode(':', $host);
		}

		return $host;
	}

	/**
	 * @return PublicSuffixListTLDExtractor
	 */
	private function getTldExtractor() {
		if ( $this->extractor !== null ) {
			return $this->extractor;
		}

		//Load the public suffix list from the cache, if possible.
		$serializedTlds = @file_get_contents($this->cacheFile);
		if ( !empty($serializedTlds) ) {
			$this->extractor = new PublicSuffixListTLDExtractor(unserialize($serializedTlds));
			return $this->extractor;
		}

		//Or attempt to download it.
		$tlds = array();
		if ( $this->fetch ) {
			$tlds = $this->fetchTldList();
		}

		if ( empty($tlds) ) {
			//If all else fails, try the local snapshot.
			$snapshotFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . '.tld_set_snapshot';
			$serializedTlds = @file_get_contents($snapshotFile);
			if ( !empty($serializedTlds) ) {
				$this->extractor = new PublicSuffixListTLDExtractor(unserialize($serializedTlds));
				return $this->extractor;
			}
		} else {
			//Update the cache.
			@file_put_contents($this->cacheFile, serialize($tlds));
		}

		$this->extractor = new PublicSuffixListTLDExtractor($tlds);
		return $this->extractor;
	}

	private function fetchTldList() {
		$tlds = array(
			'public' => array(),
			'private' => array(),
		);

		$page = $this->fetchPage('https://publicsuffix.org/list/public_suffix_list.dat');
		if (empty($page)) {
			return $tlds;
		}

		$markerPos = strpos($page, self::PRIVATE_SECTION_MARKER);
		$sections = array('public' => '', 'private' => '');
		if ($markerPos !== false) {
			$sections['public'] = substr($page, 0, $markerPos - 1);
			$sections['private'] = substr($page, $markerPos + strlen(self::PRIVATE_SECTION_MARKER) + 1);
		} else {
			$sections['public'] = $page;
		}

		foreach(array('public', 'private') as $key) {
			if ( !empty($sections[$key]) && preg_match_all('@^(?P<tld>[.*!]*\w[\S]*)@um', $sections[$key], $matches) ) {
				$tlds[$key] = array_fill_keys($matches['tld'], true);
			}
		}
		return $tlds;
	}

	private function fetchPage($url) {
		if( ini_get('allow_url_fopen') ) {
			return @file_get_contents($url);
		} else if ( is_callable('curl_exec') ) {
			$handle = curl_init($url);
			curl_setopt_array($handle, array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HEADER => false,
				CURLOPT_FAILONERROR => true,
			));
			$content = curl_exec($handle);
			curl_close($handle);
			return $content;
		}
		return '';
	}

	private function isIp($host) {
		//Strip the wrapping square brackets from IPv6 addresses
		if ( $this->startsWith($host, '[') && $this->endsWith($host, ']') ) {
			$host = substr($host, 1, -1);
		}
		return (bool)filter_var($host, FILTER_VALIDATE_IP);
	}

	private function startsWith($haystack, $needle) {
		$length = strlen($needle);
		return (substr($haystack, 0, $length) === $needle);
	}

	private function endsWith($haystack, $needle) {
	    $length = strlen($needle);
	    if ($length == 0) {
	        return true;
	    }
	    return (substr($haystack, -$length) === $needle);
	}
}

class TLDExtractResult implements ArrayAccess {
	private $fields;

	public function __construct($subdomain, $domain, $tld) {
		$this->fields = array(
			'subdomain' => $subdomain,
			'domain'    => $domain,
			'tld'       => $tld,
		);
	}

	public function __get($name) {
		if ( array_key_exists($name, $this->fields) ) {
			return $this->fields[$name];
		}
		throw new OutOfRangeException(sprintf('Unknown field "%s"', $name));
	}

	public function __isset($name) {
		return array_key_exists($name, $this->fields);
	}

	public function __set($name, $value) {
		throw new LogicException('Can\'t modify an immutable object.');
	}

	public function __toString() {
		return sprintf('%s(subdomain=\'%s\', domain=\'%s\', tld=\'%s\')', __CLASS__, $this->subdomain, $this->domain, $this->tld);
	}

	public function offsetExists($offset) {
		return array_key_exists($offset, $this->fields);
	}

	public function offsetGet($offset) {
		return $this->__get($offset);
	}

	public function offsetSet($offset, $value) {
		throw new LogicException(sprintf('Can\'t modify an immutable object. You tried to set "%s".', $offset));
	}

	public function offsetUnset($offset) {
		throw new LogicException(sprintf('Can\'t modify an immutable object. You tried to unset "%s".', $offset));
	}

	public function toArray() {
		return $this->fields;
	}
}

class PublicSuffixListTLDExtractor {
	private $tlds;

	public function __construct($tlds) {
		//Automatically convert from the old list format that didn't distinguish between the public (ICANN)
		//and private sections of the suffix list.
		if ( (count($tlds) > 2) || !isset($tlds['public'], $tlds['private']) ) {
			$tlds = array(
				'public' => $tlds,
				'private' => array(),
			);
		}
		$this->tlds = $tlds;
	}


	public function extract($host, $includePslPrivateDomains = false) {
		$parts = explode('.', $host);

		for ($i = 0; $i < count($parts); $i++) {
			$maybeTld = join('.', array_slice($parts, $i));
			$exceptionTld = '!' . $maybeTld;
			if ( $this->ruleExists($exceptionTld, $includePslPrivateDomains) ) {
				return array(
					join('.', array_slice($parts, 0, $i + 1)),
					join('.', array_slice($parts, $i + 1)),
				);
			}

			$wildcardTld = '*.' . join('.', array_slice($parts, $i + 1));
			if (
				$this->ruleExists($wildcardTld, $includePslPrivateDomains)
				|| $this->ruleExists($maybeTld, $includePslPrivateDomains)
			) {
				return array(
					join('.', array_slice($parts, 0, $i)),
					$maybeTld
				);
			}
		}

		return array($host, '');
	}

	private function ruleExists($tld, $includePslPrivateDomains) {
		return array_key_exists($tld, $this->tlds['public'])
			|| ($includePslPrivateDomains && array_key_exists($tld, $this->tlds['private']));
	}
}

function tldextract($url, $includePslPrivateDomains = false) {
	static $tldExtractor = null;
	if ( $tldExtractor === null ) {
		$tldExtractor = new TLDExtract();
	}
	return $tldExtractor->extract($url, $includePslPrivateDomains);
}