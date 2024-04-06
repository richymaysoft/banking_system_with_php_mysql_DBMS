<?php
$page = 'Privacy Policy';
include 'header.php';
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image novi-background bg-primary">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><a href="<?= $siteUrl; ?>">Home</a>
      </li>
      <li class="active">
        <?= $page; ?>
      </li>
    </ul>
  </div>
</section>
<!-- Our Story-->
<section class="section section-lg bg-default">
  <div class="container">
    <h2><span class="text-light"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Privacy Policy</span> </h2>
    <div class="row row-30 justify-content-xl-between">
      <div class="col-md-6 col-xl-6">
        <p class="big">Get the right business banking services for your organization’s needs.</p>
        <div class="box-shadow-2">
          <div class="box-shadow-header">

          </div><img class="img-responsive" src="assets/img/side1.jpg" alt="" width="569" height="169"/>
        </div>
      </div>
      <div class="col-md-6 col-xl-5">
        <ul class="list-lg">
          <li>
            <p>What Does <?= $siteName; ?> Do With Your Personal Information? Financial companies choose how they share your personal information. Federal law gives consumers the right to limit some but not all sharing. Federal law also requires <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> to tell you how we collect, share and protect your personal information. Please read this notice carefully to understand what we do.</p>
            <p>
              The types of personal information we collect and share depend on the product or service you have with us. This information can include:
            </p>

            <h4>Account Balances</h4>
            <p>
              Checking Account Information and Payment History Overdraft History and Transaction or Loss History When you are no longer our customer, we continue to share your information as described in this notice.
            </p>
            <p>
              All financial companies need to share customers’ personal information to run their everyday business. In the section below, we list the reasons financial companies can share their customers’ personal information; the reasons <?= $siteName; ?> chooses to share; and whether you can limit this sharing.</p>
          </li>

        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Our Principles-->
<section class="section section-lg bg-gray-100">
  <div class="container text-center text-lg-left">
    <h2><span class="text-light">Find</span> answers for your business.</h2>
    <div class="row row-30 number-counter-2">
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Start a business.</h5>
            <div class="content">Get strategies to build a business from the ground up.</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Manage cash flow.</h5>
            <div class="content">Discover ways to improve cash flow and your business.</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box-numbered-left unit">
          <div class="unit-left">
            <div class="index-counter"></div>
          </div>
          <div class="unit-body">
            <h5 class="title">Build your brand.</h5>
            <div class="content">Make your company – and your products – stand out.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include 'footer.php';
?>