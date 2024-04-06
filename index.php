<?php
$page = 'Welcome';
include 'header.php';
?>
<!--Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-1 context-dark" data-loop="true" data-autoplay="5000" data-simulate-touch="false">
  <div class="swiper-wrapper">
    <div class="swiper-slide" data-slide-bg="assets/img/ban3.jpg">
      <div class="swiper-slide-caption section-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
              <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">Bank Your Way on <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> from the</span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">Safety of Your Home</span></h1>
              <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">
                <?= $siteName; ?> is committed to providing you with safe and convenient options you manage your finances. You can bank 24/7 virtually anywhere using digital banking tools and much more.</p>
              <a class="rd-nav-link button button-primary text-white" href="online/">INTERNET BANKING LOGIN</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide" data-slide-bg="assets/img/ban2.jpg">
      <div class="swiper-slide-caption section-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
              <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">Banking, Accounting, Insurance</span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200">& Wealth Management</span></h1>
              <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">All these on
                <?= $siteName; ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide" data-slide-bg="assets/img/ban1.jpg">
      <div class="swiper-slide-caption section-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
              <h1><span class="d-block" data-caption-animate="fadeInUp" data-caption-delay="100">Why Choose <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> </span><span class="d-block text-light" data-caption-animate="fadeInUp" data-caption-delay="200"><?= $siteName; ?> </span></h1>
              <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="350">To
                <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>, “banking service” is about more than being kind and accessible. It’s about helping you take the next step in your financial life, whether that’s helping you buy a new home or taking your business to the next level. That’s Reality. That’s
                <?= $siteName; ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Swiper Pagination-->
  <div class="swiper-pagination-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-lg-7 offset-md-1 offset-xxl-0">
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Download Our Tax Guide App-->
<section class="section bg-gray-100 box-image-left" style="background-color: var(--secondaryColor); color: #fff;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 wow fadeInLeft">
        <div class="section-lg section-lg-top-100">
          <h2 class="title-icon title-icon-2"><span class="icon icon-default mercury-icon-touch"></span><span class="text-white">  Welcome to <br><span class="text-light text-white"><?= $siteName; ?> </span></span></h2>
          <p class="big">
            At
            <?= $siteName; ?> , you’ll find the professional expertise you and your business can depend on. Whether your business is thriving or striving,
            <?= $siteName; ?> can help.
            <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> bankers have decades of commercial experience and access to a wide range of solutions, including; Dental, Veterinary, and other professional practice financing, Apartment financing, SBA 7(a), 504, and Express loan programs, Construction financing – both commercial and residential, Home Equity lines and other personal loans.
          </p>
          <p class="big">
            <?= $siteName; ?> is a top Small Business Administration (SBA) lender, known throughout the globe for doing what it takes to help businesses succeed.
            <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> is service-oriented banking at its best and works to earn your business every day.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="box-image-item box-image-video novi-background bg-image" style="background-image: url(assets/img/pay.jpg)">
    <a href="assets/img/vid.mp4" data-lightgallery="item"></a>
  </div>
</section>
<!--Icon List 3-->
<section class="section section-lg bg-default">
  <div class="container text-center text-lg-left">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="box-icon-3 unit flex-column flex-lg-row">
          <div class="unit-left">
            <div class="icon novi-icon mercury-icon-presentation-2"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Account Alerts</h5>
            <p class="text">
              <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Alerts are the perfect tool to help you manage your account and give you peace of mind. </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="box-icon-3 unit flex-column flex-lg-row">
          <div class="unit-left">
            <div class="icon novi-icon mercury-icon-wallet"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Make a Payment</h5>
            <p class="text">Whether you have a
              <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> checking account or a savings account with another financial institution, we offer a number of secure and convenient ways for you to make your payments.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="box-icon-3 unit flex-column flex-lg-row">
          <div class="unit-left">
            <div class="icon novi-icon mercury-icon-calc"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Retirement Plans</h5>
            <p class="text">
              <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> team of professionals will help you prepare a perfect retirement plan for the nearest future.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-sm-6 col-md-4">
        <div class="box-icon-3 unit flex-column flex-lg-row">
          <div class="unit-left">
            <i class="fa fa-money-bill fa-4x text-primary"></i>
          </div>
          <div class="unit-body">
            <h5 class="title">Loans</h5>
            <p class="text">Existing
              <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> customers looking to borrow money can get a loan from
              <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Loans&trade; with fixed repayments over 1 to 7 years.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="box-icon-3 unit flex-column flex-lg-row">
          <div class="unit-left">
            <i class="fa fa-sign-in-alt fa-4x text-primary"></i>
          </div>
          <div class="unit-body">
            <h5 class="title">Online Banking</h5>
            <p class="text">Have full access to your
              <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> account,
              <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Credit Cards&trade;, account statements and transfers online.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="box-icon-3 unit flex-column flex-lg-row">
          <div class="unit-left">
            <i class="fa fa-chart-line fa-4x text-primary"></i>
          </div>
          <div class="unit-body">
            <h5 class="title">Investments</h5>
            <p class="text">Let
              <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> finicial planing experts manage your investment both short and long term.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Our Mission-->
<section class="section bg-default section-md" style="background-color: #ddd;">
  <div class="container">
    <div class="row row-30">
      <div class="col-md-6">
        <h2 class="title-icon"><span>Many Years Of Experience <span class="text-light">In Digital Banking</span></span></h2>
        <p class="big">
          <?= $siteName; ?> is a leading international banking group committed to building a sustainable business over the long-term.
          <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> operate in some of the world's most dynamic markets and have been for over 17 years. More than 90 per cent of our income and profits are derived from Europe, America, Asia and the Middle East.
        </p>
      </div>
      <div class="col-md-6">
        <video width="100%" controls>
          <source src="assets/img/vid.mp4" type="video/mp4">
          <source src="assets/img/vid.ogg" type="video/ogg"> Your browser does not support HTML video.
        </video>
      </div>
    </div>
  </div>
</section>


<section class="parallax-container bg-image novi-nackground" data-parallax-img="assets/img/cen2.jpg">
  <div class="parallax-content section-xl context-dark text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-xl-9">
          <h2>Navigate<span class="text-light"> the greatest opportunities for your organization with <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Solutions</span></h2>
          <div class="heading-5 font-weight-normal">As a financial institution, you need solutions that meet internal expectations and expand your clients’ capabilities. Trust your dedicated <?= $siteName; ?> relationship manager to help open new opportunities for you and your clients with our state of the art <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Financial Solutions Program&trade;</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Latest Articles-->
<section class="section bg-default section-md">
  <div class="container">
    <div class="box-image-small box-image-small-left">
      <div class="item-image bg-image novi-nackground" style="background-image: url(assets/img/side1.jpg)"></div>
      <div class="item-body wow fadeInRight">
        <p class="big">Access the capital and liquidity you need to support your institution's growth with <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Financial Solutions Program&trade;</p>
        <h4><a href="#"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Capital and liquidity solutions</a></h4>
        <hr><br>
        <div class="big">
        <li>Debt capital markets: senior and sub-debt placements</li>
        <li>Holding company credit: revolving lines of credit and term loans</li>
        <li>Bank level credit: fed funds, technology leasing, and guidance limits supporting international, derivative and foreign exchange activity</li>
        </div>
      </div>
    </div>
    <div class="box-image-small box-image-small-right">
      <div class="item-image bg-image novi-nackground" style="background-image: url(assets/img/side2.jpg)"></div>
      <div class="item-body wow fadeInLeft">
        <p class="big"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>  Cost effective solutions to support your financial institution's day-to-day operations.</p>
        <h4><a href="#">Manage risk and operate efficiently</a></h4>
        <hr.<br>
        <div class="big">
        <li><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>  Interest rate hedging for both your balance sheet and your client activities</li>
        <li><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>  Treasury management solutions to support efficient operations</li>
        <li><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>  Virtual payments to enhance working capital, and streamline payment and reconciliation processes</li>
        </div>
        <p></p>
      </div>
    </div>
  </div>
</section>
<?php
include 'footer.php';
?>