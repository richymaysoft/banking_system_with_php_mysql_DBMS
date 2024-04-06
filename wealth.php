<?php
$page = 'Wealth Management';
include 'header.php';
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image novi-background bg-primary">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><a href="<?= $siteUrl; ?>">Home</a>
      </li>
      <li class="active"><?= $page; ?></li>
    </ul>
  </div>
</section>
<!-- Our Story-->
<section class="section section-lg bg-default">
  <div class="container">
    <h2><span class="text-light">YOUR</span> GOALS</h2>
    <div class="row row-30 justify-content-xl-between">
      <div class="col-md-6 col-xl-6">
        <p class="big">Are you looking to plan for your retirement, save for your child’s education, or pay for a major purchase? Whatever your financial goal, <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> planning process may help you gain the clarity and confidence to take the next step.</p>
        <div class="box-shadow-2">
          <div class="box-shadow-header">
            <div class="unit flex-column flex-md-row">
              <div class="unit-left">
                <div class="heading-5"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> services</div>
              </div>
              <div class="unit-body">
                <p>Consider how you want to grow and protect your assets with <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Wealth Management strategies and services.</p>
              </div>
            </div>
          </div><img class="img-responsive" src="assets/img/side1.jpg" alt="" width="569" height="169"/>
        </div>
      </div>
      <div class="col-md-6 col-xl-5">
        <ul class="list-lg">
          <li>
            <div class="heading-5">Why choose <?= $siteName; ?>?</div>
            <p class="p-offset-1">You come first. <?= $siteName; ?> has built its reputation on prioritizing what's right for you.</p>
          </li>
          <li>
            <div class="heading-5">Ways to work with <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?></div>
            <p class="p-offset-1">What are your wealth goals? How do you prefer to invest? However you answer, you'll have access to flexible wealth planning and engagement options that fit with your life and preferences on <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> account.</p>
          </li>
          <li>
            <div class="heading-5">Managing complex Family Wealth</div>
            <p class="p-offset-1">Address complex needs for your family such as transferring assets to your loved ones, creating a succession plan for your family business, setting up a family charitable trust, managing family real estate and more from your <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> account.</p>
          </li>

        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Our Principles-->
<section class="section section-lg bg-gray-100">
  <div class="container text-center text-lg-left">
    <h2><span class="text-light">SPECIALIZED</span> WEALTH MANAGEMENT SERVICES</h2>
    <div class="row row-30 number-counter-2">
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Wealth Management from <?= $siteName; ?></h5>
            <div class="content">In-person guidance for clients starting at affordable rates. Additional benefits are available and also Bank deposit and loan balances.</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Private Wealth Management</h5>
            <div class="content">A tailored approach for individuals, families and business owners who have accumulated wealth. Best suited for clients with $3 million or more in net worth. Services may vary by location.</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Ascent Private Capital Management of <?= $siteName; ?></h5>
            <div class="content">For individuals and families with significant resources <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> provide custom services to help sustain your wealth and make an impact over generations. Offered to clients with more than $75 million in net worth.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>