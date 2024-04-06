<footer class="section footer-classic">
  <div class="footer-inner-1">
    <div class="container">
      <div class="row row-40">
        <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
          <h5>Our Contacts</h5>
          <ul class="contact-list font-weight-bold">
            <li>
              <div class="unit unit-spacing-xs">
                <div class="unit-left">
                  <div class="icon icon-sm icon-primary novi-icon mdi mdi-map-marker"></div>
                </div>
                <div class="unit-body">
                  <a href="#">
                    <?= $siteAddress; ?>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="unit unit-spacing-xs">
                <div class="unit-left">
                  <div class="icon icon-sm icon-primary novi-icon mdi mdi-email"></div>
                </div>
                <div class="unit-body">
                  <a href="mailto:<?= $siteEmail; ?>">
                    <?= $siteEmail; ?>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <div class="unit unit-spacing-xs">
                <div class="unit-left">
                  <div class="icon icon-sm icon-primary novi-icon mdi mdi-clock"></div>
                </div>
                <div class="unit-body">
                  <ul class="list-0">
                    <li>Weekdays: 9:00–17:00</li>
                    <li>Weekends: Closed</li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6">
          <h5>Quick Links</h5>
          <ul class="footer-list big">
            <li><a href="online/">Account Management</a>
            </li>
            <li><a href="privacy-policy.php">Privacy Policy</a>
            </li>
            <li><a href="terms.php">Terms of Service</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6">
          <h5>Online Banking</h5>
          <ul class="footer-list big">
            <li>
              <a href="online/">
                <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Loans</a>
            </li>
            <li>
              <a href="online/">
                <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Investments</a>
            </li>
            <li>
              <a href="online/">
                <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Insurance</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-inner-2">
    <div class="container">
      <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved.
        <a href="<?= $siteUrl; ?>">
          <?= $siteName; ?> | Member FDIC
        </a>
        
      </p>
    </div>
  </div>
</footer>
</div>
<script language="javascript">
	populateCountries( "country", "state" );
	populateCountries( "country2" );
	populateCountries( "country2" );
</script>
<script src="assets/js/core.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="online/assets/js/fontawesome.min.js"></script>
<script src="online/assets/js/all.min.js"></script>
<script src="online/assets/vendor/flatpickr/flatpickr.min.js"></script>
<!--coded by Starlight-->
<script src="//code.tidio.co/ynas9z11augeklnxxphbzhvsmheorfl3.js" async></script>
</body>
</html>