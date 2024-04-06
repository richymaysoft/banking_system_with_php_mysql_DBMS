-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2023 at 02:20 PM
-- Server version: 10.3.37-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firmtrus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(100) NOT NULL,
  `account_id` varchar(40) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL,
  `savings_acc` varchar(40) DEFAULT NULL,
  `check_acc` varchar(40) DEFAULT NULL,
  `savings_balance` varchar(500) DEFAULT NULL,
  `check_balance` varchar(500) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip` varchar(40) DEFAULT NULL,
  `dob` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `pin` varchar(100) DEFAULT NULL,
  `cot` varchar(40) DEFAULT NULL,
  `tax` varchar(40) DEFAULT NULL,
  `imf` varchar(40) DEFAULT NULL,
  `otp` int(10) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'user-default.png',
  `creditCard` varchar(100) DEFAULT NULL,
  `expire` varchar(10) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `lastDate` varchar(255) DEFAULT NULL,
  `lastTime` varchar(255) DEFAULT NULL,
  `lastUrl` varchar(255) DEFAULT NULL,
  `allow_upload` varchar(100) DEFAULT '0',
  `allow_codes` varchar(100) DEFAULT '0',
  `created_at` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_id`, `name`, `status`, `savings_acc`, `check_acc`, `savings_balance`, `check_balance`, `email`, `currency`, `password`, `phone`, `city`, `country`, `address`, `zip`, `dob`, `gender`, `occupation`, `pin`, `cot`, `tax`, `imf`, `otp`, `photo`, `creditCard`, `expire`, `ip`, `lastDate`, `lastTime`, `lastUrl`, `allow_upload`, `allow_codes`, `created_at`) VALUES
(1, '1234567', 'Jane Doe', 'Active', '002235884331', '002235884179', '20007289.7', '17000.7', 'juanalvare991@gmail.com', '$', '827ccb0eea8a706c4c34a16891f84e7b', '07066721094', '', '-1', 'Hawkins Ln, Redcliffe, Bristol BS1 6WQ, United Kingdom Bristol, BS BS1 6WQ', 'BS1 6WQ', 'Wednesday 1st of January 1992', 'Male', 'Web Developer', '1234', '1234', '1234', '1234', 7395, 'user-default.png', '8332', '01/25', '185.171.92.228', 'Thursday 2nd of February 2023', '09:22 AM', 'https://firmtrustbk.com/online/Beneficiary?id=3', '2', '2', 'Thursday 13th of January 2022'),
(12, '1304069', 'Larry James ', 'Active', '003350370510', '003350370590', '250000', '2985000', 'jamesdavidrealtyllc@aol.com', '$', '519b661cd50ce3196a9b566c0aea8f02', '9498261692', 'New York', 'USA', '216 W 100th St  New York, NY , USA', '10025', 'Monday 8th of August 1983', 'Male', 'Gemologist', '6062', '110083676', '311-161', 'FTCREDITS59', NULL, '1135IMG_0178.jpeg', '5316', '01/26', '105.112.214.107', 'Wednesday 4th of January 2023', '08:05 PM', 'https://firmtrustbk.com/online/Account', '2', '2', 'Wednesday 8th of January 2020'),
(11, '2777649', 'Barry Goodman', 'Active', '001181008958', '001181008606', '2757000', '3207000', 'barrygoodmandiamonds001@gmail.com', '$', '519b661cd50ce3196a9b566c0aea8f02', '8604195995', 'New York', 'USA', '148 Monroe Dr, Montauk, NY ', '11954', 'Saturday 25th of August 1979', 'Male', 'Gemologist', '4453', '110034950', '428-802', 'FTCREDITS18', 8962, '1426IMG_1598.JPG', '9281', '12/25', '105.112.212.202', 'Saturday 14th of January 2023', '06:19 PM', 'https://firmtrustbk.com/online/Account', '1', '0', 'Thursday 17th of April 2014');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '7d5c0a033850284a3e292f03a150cb1f');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `id` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `swift` varchar(100) DEFAULT NULL,
  `rtn` varchar(100) DEFAULT NULL,
  `acc_no` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT 'user-default.png',
  `email` varchar(255) NOT NULL,
  `donor` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`id`, `name`, `address`, `bank`, `swift`, `rtn`, `acc_no`, `image`, `email`, `donor`, `created_at`) VALUES
(3, 'Christiano Ronaldo', '#3 John Doe Ave.', 'Barclays Bank', 'BCL234', '123456789', '0030040404', 'KINSMEN503_20210827_175843.jpg', 'christiano@gmail.com', '1234567', '04/02/2022 06:34');

-- --------------------------------------------------------

--
-- Table structure for table `checks`
--

CREATE TABLE `checks` (
  `id` int(255) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `front` varchar(255) DEFAULT NULL,
  `back` varchar(255) DEFAULT NULL,
  `remarks` mediumtext DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `checks`
--

INSERT INTO `checks` (`id`, `user_id`, `front`, `back`, `remarks`, `created_at`) VALUES
(1, '1', '97216487856276929000551527239842959.jpg', '26416487856327292009514163891877220.jpg', 'This is a test', '04/01/2022 05:00');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` mediumtext DEFAULT NULL,
  `body` mediumtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `name`, `subject`, `body`) VALUES
(1, 'Debit Alert', 'Transaction Alert [Debit: transaction_amount]', '<h3>Dear user_full_name,</h3>\r\n	<p>Your account has been Debited</p>\r\n <center>\r\n	<h4>transaction_amount</h4>\r\n	</center>\r\n	<p><strong style=\"color: site_theme_color\">Transaction Details:</strong></p>\r\n	<table class=\"mail-table\">\r\n  <tr>\r\n    <td class=\"table-left\">Account Type</td>\r\n    <td class=\"table-right\">account_type</td>\r\n  </tr>\r\n  <tr>\r\n    <td class=\"table-left\">Account Number</td>\r\n    <td class=\"table-right\">account_number</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Account Name</td>\r\n    <td class=\"table-right\">account_name</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Description</td>\r\n    <td class=\"table-right\">the_description</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Transaction ID</td>\r\n    <td class=\"table-right\">reference_id</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Date</td>\r\n    <td class=\"table-right\">current_date</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Available Balance</td>\r\n    <td class=\"table-right\">available_balance</td>\r\n  </tr>\r\n</table>'),
(29, 'Credit Alert', 'Transaction Alert [Credit: transaction_amount]', '<h3>Dear user_full_name,</h3>\r\n	<p>Your account has been Credited</p>\r\n <center>\r\n	<h4>transaction_amount</h4>\r\n	</center>\r\n	<p><strong style=\"color: site_theme_color\">Transaction Details:</strong></p>\r\n	<table class=\"mail-table\">\r\n  <tr>\r\n    <td class=\"table-left\">Account Type</td>\r\n    <td class=\"table-right\">account_type</td>\r\n  </tr>\r\n  <tr>\r\n    <td class=\"table-left\">Account Number</td>\r\n    <td class=\"table-right\">account_number</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Sender</td>\r\n    <td class=\"table-right\">the_sender</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Description</td>\r\n    <td class=\"table-right\">the_description</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Transaction ID</td>\r\n    <td class=\"table-right\">reference_id</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Date</td>\r\n    <td class=\"table-right\">current_date</td>\r\n  </tr>\r\n		<tr>\r\n    <td class=\"table-left\">Available Balance</td>\r\n    <td class=\"table-right\">available_balance</td>\r\n  </tr>\r\n</table>'),
(28, 'Reset Password', 'Password Reset Validation', '<h3>Hello user_full_name,</h3>\r\n<p>\r\nYou have requested to reset your password<br/> \r\nKindly Login with the following password:\r\n</p>\r\n<h3>new_password</h3>\r\n<p>You are required to change your password immediately after login</p>'),
(26, 'Support Ticket', 'Support Ticket Notification', '<h3>New Support Ticket from user_full_name - user_email</h3>\r\n					<p><b>Title: </b>ticket_title</p>\r\n					<p><b>Department: </b>ticket_dept</p>\r\n           <strong>Content:</strong><br> ticket_description\r\n					<p>\r\n<br>\r\n<b>Date: </b>current_date</p>\r\n<br>\r\n<b>Reference: </b>ticket_reference'),
(27, 'Check Deposit', 'New Check Deposit', '<p>&nbsp;You have a new Check Deposit Upload<br>&nbsp;Details:</p><p><b>Name: </b>user_full_name</p><p><b>Email: </b>user_email</p><p><b>Remarks: </b>the_remarks</p><p><b>Date: </b>current_date</p><p><b>Front Photo: </b><a href=\\\"\\\\&quot;site_upload_folder/the_front\\\\&quot;\\\" target=\\\"\\\\&quot;_blank\\\\&quot;\\\">VIEW FRONT</a></p><p><b>Back Photo: </b><a href=\\\"\\\\&quot;site_upload_folder/the_back\\\\&quot;\\\" target=\\\"\\\\&quot;_blank\\\\&quot;\\\">VIEW BACK</a></p>'),
(30, 'Login Notification', 'New Login Notification', '<h3>Hi Admin</h3>\r\n			<p>A new login has been detected on <strong>site_url</strong><br> See details below</p>\r\n			<p><strong style=\"color: site_theme_color\">Date: </strong>current_date</p>\r\n			<p><strong style=\"color: site_theme_color\">Account Name: </strong>user_full_name</p>\r\n			<p><strong style=\"color: site_theme_color\">Account ID: </strong>acc_id</p>\r\n			<p><strong style=\"color: site_theme_color\">IP Address: </strong>ip_address</p>\r\n			<p><strong style=\"color: site_theme_color\">Location Details (From IP Address): </strong>login_location</p>\r\n			<p><strong style=\"color: site_theme_color\">Device Details: </strong>login_device</p>'),
(31, 'OTP', 'site_name Alert', '<h3>Dear user_full_name,</h3>\r\n<p>Please approve your transaction with the One Time Passcode (OTP) below:</p>\r\n<h2 style=\"color: site_theme_color\">the_otp</h2>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` text DEFAULT NULL,
  `body` longtext DEFAULT NULL,
  `status` text DEFAULT '0',
  `updated` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `status`, `updated`) VALUES
(1, 'Welcome', '<p><span style=\\\\\\\"\\\\\\\\\\\"font-weight:\\\\\\\" normal;\\\\\\\\\\\\\\\"=\\\\\\\"\\\\\\\">This is a General Notice. Can be turned ON/OFF via the admin panel.</span><br></p>', '0', '04/01/2022 18:21');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(100) NOT NULL,
  `access` int(100) NOT NULL,
  `data` text NOT NULL,
  `expiry` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `access`, `data`, `expiry`) VALUES
(6, 1234568, 'Mozilla/5.0 (Linux; Android 11; Redmi Note 9S) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.79 Mobile Safari/537.36', '202304071608'),
(8, 1234568, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', '202304071839'),
(15, 1234568, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0', '202304081301'),
(17, 1234568, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0', '202304081302'),
(103, 1234567, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 OPR/89.0.4447.64', '202308141010'),
(102, 1234567, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6 Mobile/15E148 Safari/604.1', '202308140632'),
(101, 1234567, 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.1 Mobile/15E148 Safari/604.1', '202308140629'),
(100, 1234567, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6 Mobile/15E148 Safari/604.1', '202308111734'),
(99, 1234567, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E148 Safari/604.1', '202308102021'),
(98, 1234567, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6 Mobile/15E148 Safari/604.1', '202308102020'),
(97, 1234567, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6 Mobile/15E148 Safari/604.1', '202308101925'),
(96, 1234567, 'Mozilla/5.0 (Linux; Android 10; SM-G965F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36', '202308091011'),
(95, 1234567, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6 Mobile/15E148 Safari/604.1', '202308041139'),
(94, 1234567, 'Mozilla/5.0 (Linux; Android 11; Infinix X695) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Mobile Safari/537.36', '202308041131'),
(93, 1234567, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Safari/537.36', '202307221952'),
(92, 1234567, 'Mozilla/5.0 (Linux; U; Android 11; en-gb; SM-A127F Build/RP1A.200720.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36 PHX/10.6', '202307220022'),
(91, 1234567, 'Mozilla/5.0 (Linux; U; Android 11; en-gb; SM-A127F Build/RP1A.200720.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36 PHX/10.6', '202307202341'),
(90, 1234567, 'Mozilla/5.0 (Linux; Android 8.1.0; TECNO LA7 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.126 Mobile Safari/537.36', '202307201944'),
(89, 1234567, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Safari/537.36', '202307201923'),
(88, 1234567, 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Mobile/15E148 Safari/604.1', '202307201810'),
(87, 1234567, 'Mozilla/5.0 (Linux; Android 12; SM-G988B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '202307141243'),
(86, 1234567, 'Mozilla/5.0 (Linux; Android 9; Infinix X653) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '202307101400'),
(85, 1234567, 'Mozilla/5.0 (Linux; Android 9; Infinix X653) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '202307101335'),
(104, 1234567, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', '202311151501'),
(105, 2777649, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E148 Safari/604.1', '202312170400'),
(106, 1304069, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54', '202401040245'),
(107, 1304069, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E148 Safari/604.1', '202401041952'),
(108, 1304069, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54', '202401042002'),
(109, 1304069, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54', '202401042005'),
(110, 2777649, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54', '202401111252'),
(111, 2777649, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0', '202401111259'),
(112, 2777649, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E148 Safari/604.1', '202401111310'),
(113, 2777649, 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_7_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.3 Mobile/15E148 Safari/604.1', '202401121942'),
(114, 2777649, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0', '202401141818'),
(115, 1234567, 'Mozilla/5.0 (Linux; Android 9; SM-G965U) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.181 Mobile Safari/537.36', '202402011642'),
(116, 1234567, 'Mozilla/5.0 (Linux; Android 9; Infinix X652) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '202402011733'),
(117, 1234567, 'Mozilla/5.0 (Linux; Android 9; Infinix X652) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '202402012015'),
(118, 1234567, 'Mozilla/5.0 (Linux; Android 9; SM-G965U) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.181 Mobile Safari/537.36', '202402020841'),
(119, 1234567, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0', '202402020847'),
(120, 1234567, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 Edg/109.0.1518.70', '202402020852'),
(121, 1234567, 'Mozilla/5.0 (Linux; Android 9; Infinix X652) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '202402020921');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `protocol` varchar(100) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_description` longtext DEFAULT NULL,
  `siteKeywords` mediumtext DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `wire_fees` varchar(10) NOT NULL DEFAULT '0.5',
  `abrv` varchar(100) DEFAULT NULL,
  `chat_code` mediumtext DEFAULT NULL,
  `theme_color` varchar(255) DEFAULT NULL,
  `secondary_color` varchar(100) DEFAULT NULL,
  `upload_folder` varchar(255) DEFAULT NULL,
  `theme_folder` varchar(255) DEFAULT NULL,
  `company_logo` varchar(100) DEFAULT NULL,
  `company_favicon` varchar(100) DEFAULT NULL,
  `company_timezone` varchar(255) DEFAULT NULL,
  `recaptcha` int(1) NOT NULL DEFAULT 1,
  `captchaPublicKey` varchar(255) DEFAULT NULL,
  `captchaPrivateKey` varchar(255) DEFAULT NULL,
  `live_chat` int(1) NOT NULL DEFAULT 1,
  `login_notification` int(1) NOT NULL DEFAULT 1,
  `otp` int(1) NOT NULL DEFAULT 1,
  `one_signal_api` varchar(255) DEFAULT NULL,
  `email_header` longtext DEFAULT NULL,
  `email_footer` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `protocol`, `domain`, `company_name`, `company_description`, `siteKeywords`, `company_email`, `company_address`, `company_phone`, `wire_fees`, `abrv`, `chat_code`, `theme_color`, `secondary_color`, `upload_folder`, `theme_folder`, `company_logo`, `company_favicon`, `company_timezone`, `recaptcha`, `captchaPublicKey`, `captchaPrivateKey`, `live_chat`, `login_notification`, `otp`, `one_signal_api`, `email_header`, `email_footer`) VALUES
(1, 'https://', 'firmtrustbk.com', 'Firm Trust Credits', 'Firm Trust was launched to make online banking easy and fast.', 'Bank, Kinsmen, Internet Banking', 'support@firmtrustbk.com', '46 Brookbank Close, Cheltenham, England, GL50 3NB', '10000000001', '0.4', 'FTCREDITS', '', '#00539a', '#0670be', 'https://firmtrustbk.com/online/upload', 'https://firmtrustbk.com/online/assets', '558567kinsmen (3).png', 'kinsmen_favicon.png', 'Africa/Lagos', 0, '6LfVOFIcAAAAAJNh1Oa3oAU3PDrLxwNJhWonFUtA', '6LfVOFIcAAAAAAldKtifKUgslm0hSLSCPyPiQ5Su', 1, 0, 1, '0877cd5e-914d-4d87-8569-dfbc8186aabe', '<!doctype html>\r\n<html>\r\n<head>\r\n	<meta charset=\"utf-8\">\r\n	<title>Mail</title>\r\n	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n<style>\r\n.mail-table {\r\n  border: 1px solid #ddd;\r\n  padding: 8px;\r\n  width: 90%;\r\n}\r\n.table-right {\r\nbackground-color: #ddd;\r\npadding: 10px;\r\n  text-align: left;\r\n}\r\n.table-left {\r\n  padding: 10px;\r\n  text-align: left;\r\n  background-color: site_theme_color;\r\n  color: white;\r\n}\r\n</style>\r\n</head>\r\n<body>\r\n	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n		<tbody>\r\n			<tr>\r\n				<td width=\"100%\" align=\"center\" valign=\"top\" bgcolor=\"#eeeeee\" height=\"20\"></td>\r\n			</tr>\r\n			<tr>\r\n				<td bgcolor=\"#eeeeee\" align=\"center\" style=\"padding:0px 15px 0px 15px\" class=\"m_2902568367268423488section-padding\">\r\n					<table bgcolor=\"#ffffff\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:600px\" class=\"m_2902568367268423488responsive-table\">\r\n						<tbody>\r\n							<tr>\r\n								<td>\r\n									<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n										<tbody>\r\n											<tr>\r\n												<td align=\"center\" style=\"padding:30px; background-color: site_theme_color\">\r\n													<a href=\"site_url\"> \r\n																							<img src=\"site_upload_folder/site_logo\" alt=\"site_name\" width=\"150\" border=\"0\" style=\"vertical-align:middle\" class=\"CToWUd\"> </a>\r\n												\r\n												</td>\r\n											</tr>\r\n											\r\n												<tr>\r\n													<td class=\"m_2902568367268423488content\" style=\"font:15px/21px \\\'Helvetica Neue\\\',Arial,\\\'sans-serif\\\';text-align:left;color:#555555;\">\r\n														<div style=\"padding: 35px 20px\">', '</div>\r\n													</td>\r\n												</tr>\r\n																						<tr>\r\n													<td class=\"m_2902568367268423488content\" style=\"font:15px/21px \\\'Helvetica Neue\\\',Arial,\\\'sans-serif\\\';text-align:left;color:site_theme_color;\">\r\n														<div style=\"padding-left: 20px\">\r\n														<p> <span style=\"color:#000\">Best Regards, </span><br> site_name. </p>\r\n														</div>\r\n													</td>\r\n												</tr>\r\n											\r\n										</tbody>\r\n									</table>\r\n								</td>\r\n							</tr>\r\n							<tr>\r\n								<td width=\"100%\" align=\"center\" valign=\"top\" bgcolor=\"#ffffff\" height=\"20\"></td>\r\n							</tr>\r\n						</tbody>\r\n					</table>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td bgcolor=\"#eeeeee\" align=\"center\" style=\"padding:20px 0px\">\r\n					<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"max-width:600px\" class=\"m_2902568367268423488responsive-table\">\r\n						<tbody>\r\n							<tr> </tr>\r\n							<tr>\r\n								<td bgcolor=\"#eeeeee\" align=\"center\">\r\n									<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"max-width:600px\" class=\"m_2902568367268423488responsive-table\">\r\n										<tbody>\r\n											<tr>\r\n												<td style=\"color:#999999;font-size:12px;line-height:16px;text-align:center;font-family:arial,helvetica neue,helvetica,sans-serif\"> Â© site_name current_year </td>\r\n											</tr>\r\n										</tbody>\r\n									</table>\r\n								</td>\r\n							</tr>\r\n						</tbody>\r\n					</table>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(40) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `one_signal_id` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `user_id`, `one_signal_id`) VALUES
(16, '1', 'e5267111-bfb4-48bb-89c9-7c3f20fc33e4'),
(15, '1', 'a07b80a3-0b87-4db6-a5a5-b73f68d7a23e'),
(14, '4', '78142c17-8afc-40c4-9f67-1a6ef6381f62'),
(13, '1', 'b5f19e3b-f17b-4453-9537-8091e4ab8c28'),
(12, '1', '37f88d3b-b89e-4ad2-806c-cf128c03811e'),
(9, '1', '51c49a4e-a2fd-4098-8a4b-80559476d60d'),
(17, '1', 'd601aabd-d6b2-4b00-80d1-de11ea5a7ee0');

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` int(100) NOT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `dept` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_transfer`
--

CREATE TABLE `temp_transfer` (
  `id` int(10) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `amount` int(30) DEFAULT NULL,
  `bank_name` varchar(40) DEFAULT NULL,
  `bank_address` varchar(500) DEFAULT NULL,
  `sender_id` varchar(100) DEFAULT NULL,
  `sender_acc` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `receiver_name` varchar(255) DEFAULT NULL,
  `receiver_acc` varchar(30) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `swift` varchar(100) DEFAULT NULL,
  `routing` varchar(100) DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Pending',
  `balance` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `temp_transfer`
--

INSERT INTO `temp_transfer` (`id`, `user_id`, `amount`, `bank_name`, `bank_address`, `sender_id`, `sender_acc`, `ref`, `receiver_name`, `receiver_acc`, `type`, `swift`, `routing`, `remarks`, `status`, `balance`, `date`, `month`) VALUES
(6, 11, 2300, 'Bank of west ', '', '2777649', '001181008958', 'FTCREDITS3426', 'First bank ', '453855', 'Debit', '25458', '35385', 'Machine payment ', 'Pending', '2754700', '01/11/2023 13:13', 'January 2023'),
(7, 1, 200, 'first bank', 'adh a daid', '1234567', '002235884331', 'FTCREDITS4184', 'Doge coin', '44544746464', 'Debit', '353635g53', '356354545', 'paid', 'Successfull', '20007290.5', '02/02/2023 08:54', 'February 2023');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(10) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `amount` int(30) DEFAULT NULL,
  `bank_name` varchar(40) DEFAULT NULL,
  `bank_address` varchar(500) DEFAULT NULL,
  `sender_id` varchar(500) DEFAULT NULL,
  `sender_acc` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `receiver_name` varchar(255) DEFAULT NULL,
  `receiver_acc` varchar(30) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `swift` varchar(100) DEFAULT NULL,
  `routing` varchar(100) DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Successful',
  `balance` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `user_id`, `amount`, `bank_name`, `bank_address`, `sender_id`, `sender_acc`, `ref`, `receiver_name`, `receiver_acc`, `type`, `swift`, `routing`, `remarks`, `status`, `balance`, `date`, `month`) VALUES
(247, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Oneill Dawson', 'Savings', 'FTCREDITS174', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS174202212170313 Credit', 'Successful', '848466', '12/10/2022 13:25', 'December 2022'),
(248, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Short Stewart', 'Checking', 'FTCREDITS407', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS407202212170313 Credit', 'Successful', '67016', '12/09/2022 01:53', 'December 2022'),
(249, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Wells Riley', 'Checking', 'FTCREDITS189', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS189202212170313 Credit', 'Successful', '654092', '12/07/2022 00:17', 'December 2022'),
(250, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Wynn Schultz', 'Checking', 'FTCREDITS264', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS264202212170314 Credit', 'Successful', '18457', '12/06/2022 22:30', 'December 2022'),
(251, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Chan Baxter', 'Checking', 'FTCREDITS638', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS638202212170314 Credit', 'Successful', '437326', '12/15/2022 21:50', 'December 2022'),
(252, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Shelton Holden', 'Checking', 'FTCREDITS745', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS745202212170314 Credit', 'Successful', '737077', '12/11/2022 17:09', 'December 2022'),
(253, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Mcmillan Gutierrez', 'Savings', 'FTCREDITS969', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS969202212170314 Credit', 'Successful', '342741', '12/13/2022 09:10', 'December 2022'),
(254, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Dotson Reed', 'Checking', 'FTCREDITS296', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS296202212170314 Credit', 'Successful', '795303', '12/05/2022 01:17', 'December 2022'),
(255, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Wise Noble', 'Checking', 'FTCREDITS910', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS910202212170314 Credit', 'Successful', '861417', '12/08/2022 21:35', 'December 2022'),
(256, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Rosa Roth', 'Checking', 'FTCREDITS753', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS753202212170314 Credit', 'Successful', '147717', '12/12/2022 07:13', 'December 2022'),
(257, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Diaz Church', 'Savings', 'FTCREDITS536', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS536202212170314 Credit', 'Successful', '745809', '12/09/2022 09:17', 'December 2022'),
(258, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Foley Ellis', 'Checking', 'FTCREDITS105', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS105202212170314 Credit', 'Successful', '676376', '12/12/2022 11:25', 'December 2022'),
(259, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Aguirre Chase', 'Savings', 'FTCREDITS434', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS434202212170314 Credit', 'Successful', '928733', '12/07/2022 09:23', 'December 2022'),
(260, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Page Gentry', 'Checking', 'FTCREDITS319', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS319202212170314 Credit', 'Successful', '661141', '12/11/2022 18:05', 'December 2022'),
(261, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Black Lindsey', 'Savings', 'FTCREDITS826', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS826202212170314 Credit', 'Successful', '458358', '12/08/2022 03:20', 'December 2022'),
(262, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Burris Holder', 'Savings', 'FTCREDITS387', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS387202212170314 Credit', 'Successful', '134412', '12/14/2022 19:12', 'December 2022'),
(263, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Tyson Christensen', 'Checking', 'FTCREDITS586', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS586202212170314 Credit', 'Successful', '40120', '12/10/2022 11:33', 'December 2022'),
(264, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Aguirre Mckee', 'Checking', 'FTCREDITS689', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS689202212170314 Credit', 'Successful', '916801', '12/15/2022 14:04', 'December 2022'),
(265, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Fitzgerald Whitaker', 'Savings', 'FTCREDITS131', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS131202212170314 Credit', 'Successful', '246335', '12/10/2022 13:41', 'December 2022'),
(266, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Watson Rhodes', 'Checking', 'FTCREDITS149', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS149202212170314 Credit', 'Successful', '865283', '12/06/2022 19:09', 'December 2022'),
(267, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Greene Buchanan', 'Checking', 'FTCREDITS624', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS624202212170315 Credit', 'Successful', '192136', '12/05/2022 19:24', 'December 2022'),
(268, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Craig Hammond', 'Savings', 'FTCREDITS569', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS569202212170315 Credit', 'Successful', '320878', '12/13/2022 19:00', 'December 2022'),
(269, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Black Moses', 'Checking', 'FTCREDITS894', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS894202212170315 Credit', 'Successful', '158694', '12/14/2022 15:51', 'December 2022'),
(270, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Vinson Shannon', 'Savings', 'FTCREDITS639', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS639202212170315 Credit', 'Successful', '914849', '12/12/2022 16:05', 'December 2022'),
(271, 11, 2500000, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Dalton Montoya', 'Savings', 'FTCREDITS453', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS453202212170315 Credit', 'Successful', '705648', '12/11/2022 00:07', 'December 2022'),
(272, 11, 450000, 'Firm Trust Credits', 'Internet Banking', 'Grace and Frank Jewelries', 'Checking', 'FTCREDITS1658', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, '', 'Successful', '3207000', '09/14/2021 12:00', 'September 2021'),
(273, 11, 6, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Bishop Vargas', 'Checking', 'FTCREDITS385', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS385202212170327 Credit', 'Successful', '265119', '09/22/2021 21:52', 'September 2021'),
(274, 11, 4, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Barton Holmes', 'Checking', 'FTCREDITS215', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS215202212170328 Credit', 'Successful', '121152', '11/17/2021 00:27', 'November 2021'),
(275, 11, 7, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Floyd Bowers', 'Checking', 'FTCREDITS266', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS266202212170328 Credit', 'Successful', '740742', '11/27/2021 12:05', 'November 2021'),
(276, 11, 8, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Brooks Horne', 'Checking', 'FTCREDITS893', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS893202212170328 Credit', 'Successful', '228770', '04/10/2022 18:46', 'April 2022'),
(277, 11, 8, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Wilson Michael', 'Savings', 'FTCREDITS912', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS912202212170328 Credit', 'Successful', '340551', '02/07/2021 21:13', 'February 2021'),
(278, 11, 9, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Ramirez Maldonado', 'Savings', 'FTCREDITS189', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS189202212170328 Credit', 'Successful', '492736', '08/06/2022 01:36', 'August 2022'),
(279, 11, 4, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Horn Blevins', 'Savings', 'FTCREDITS383', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS383202212170328 Credit', 'Successful', '959435', '12/06/2021 04:07', 'December 2021'),
(280, 11, 2500700, 'Firm Trust Credits', '46 Brookbank Close, Cheltenham, England, GL50 3NB', 'Aguirre Petty', 'Checking', 'FTCREDITS193', 'Barry Goodman', '001181008606', 'Credit', NULL, NULL, 'FTCREDITS193202212170330 Credit', 'Successful', '876300', '06/30/2009 15:48', 'June 2009'),
(281, 12, 145000, 'Firm Trust Credits', 'Internet Banking', 'Maxwell', 'Checking', 'FTCREDITS7541', 'James David', '003350370590', 'Credit', NULL, NULL, 'Market Price', 'Successful', '145000', '01/16/2020 12:00', 'January 2020'),
(282, 12, 250000, 'Firm Trust Credits', 'Internet Banking', 'Anthony', 'Savings', 'FTCREDITS9243', 'James David', '003350370510', 'Credit', NULL, NULL, 'Payment ', 'Successful', '250000', '01/05/2021 12:00', 'January 2021'),
(283, 12, 1450000, 'Firm Trust Credits', 'Internet Banking', 'Garret', 'Checking', 'FTCREDITS1467', 'James David', '003350370590', 'Credit', NULL, NULL, '', 'Successful', '1595000', '01/13/2021 12:00', 'January 2021'),
(284, 12, 40000, 'Firm Trust Credits', 'Internet Banking', 'Machine', 'Checking', 'FTCREDITS9031', 'James David', '003350370590', 'Credit', NULL, NULL, '', 'Successful', '1635000', '01/04/2022 12:00', 'January 2022'),
(285, 12, 1500000, 'Firm Trust Credits', 'Internet Banking', 'Anthon Jewelries ', 'Checking', 'FTCREDITS8171', 'James David', '003350370590', 'Credit', NULL, NULL, '', 'Successful', '3135000', '12/29/2023 12:00', 'December 2023'),
(286, 12, 150000, 'Bank of America', '', 'Larry James ', '003350370590', 'FTCREDITS4102', 'Grt Jewelries ', '456643477', 'Debit', NULL, NULL, '', 'Successful', '2985000', '01/18/2022 12:00', 'January 2022'),
(287, NULL, 200, 'first bank', 'adh a daid', '1234567', '002235884331', 'FTCREDITS4184', 'Doge coin', '44544746464', 'Debit', '353635g53', '356354545', 'paid', 'Successful', '20007289.7', '02/02/2023 08:54', 'February 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checks`
--
ALTER TABLE `checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_transfer`
--
ALTER TABLE `temp_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checks`
--
ALTER TABLE `checks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `temp_transfer`
--
ALTER TABLE `temp_transfer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
