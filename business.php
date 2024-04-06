<?php
$page = 'Business Banking';
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
    <h2><span class="text-light"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Business</span> </h2>
    <div class="row row-30 justify-content-xl-between">
      <div class="col-md-6 col-xl-6">
        <p class="big">Get the right business banking services for your organization’s needs on <?= $siteName; ?></p>
        <div class="box-shadow-2">
          <div class="box-shadow-header">
            <div class="unit flex-column flex-md-row">
              <div class="unit-left">
                <div class="heading-5">Small businesses</div>
              </div>
              <div class="unit-body">
                <p>Whether you’re just starting out or are established with up to $10M in annual revenue, <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> offers a unique blend of branch services and digital tools to help you manage your small business banking needs.</p>
              </div>
            </div>
          </div><img class="img-responsive" src="assets/img/side1.jpg" alt="" width="569" height="169"/>
        </div>
      </div>
      <div class="col-md-6 col-xl-5">
        <ul class="list-lg">
          <li>
            <div class="heading-5">Scale-up businesses</div>
            <p class="p-offset-1">As your revenue grows, so do your scale-up business’s financial needs. <?= $siteName; ?> is ready to support your growth with everything from financing to more customized payment services.</p>
          </li>
          <li>
            <div class="heading-5">Mid-sized companies</div>
            <p class="p-offset-1">If your company has an annual revenue from $10M to $500M, receive customized service from <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>'s commercial banking division as you work toward your financial and operational goals.</p>
          </li>
          <li>
            <div class="heading-5">Large corporations</div>
            <p class="p-offset-1">For large public or private firms with annual revenues greater than $500M, <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>'s corporate banking division provides relationship managers to serve as your specialized financial partner</p>
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