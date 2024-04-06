<?php
$page = 'Investment Banking';
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
          <h2><span class="text-light"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> is by your side.</span> </h2>
          <div class="row row-30 justify-content-xl-between">
            <div class="col-md-6 col-xl-6">
              <p class="big"><?= $siteName; ?> is by your side during these unprecedented times. Read an overview of the actions we’re taking in Investment
                 Services to minimize the impact of COVID-19 on our clients, partners and employees.</p>
              <div class="box-shadow-2">
                <div class="box-shadow-header">
                  <div class="unit flex-column flex-md-row">
                    <div class="unit-left">
                      <div class="heading-5"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Custody solutions</div>
                    </div>
                    <div class="unit-body">
                      <p>At <?= $sitename; ?>, we use our financial strength and expert resources to create custody solutions.
                        Focused on your specific needs, we maintain the highest standards of ethics, security and transparency.</p>
                    </div>
                  </div>
                </div><img class="img-responsive" src="assets/img/side1.jpg" alt="" width="569" height="169"/>
              </div>
            </div>
            <div class="col-md-6 col-xl-5">
              <ul class="list-lg">
                <li>
                  <div class="heading-5"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Corporate trust</div>
                  <p class="p-offset-1">With expertise drawn from a tradition of market leadership,
                    <?= $siteName; ?> provides consistent guidance and industry-leading technology to keep you moving forward.</p>
                </li>
                <li>
                  <div class="heading-5"><?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> Fund services</div>
                  <p class="p-offset-1"><?= $siteName; ?> supports even the most complex products and client needs through
                    client-centered service and customized solutions. As you grow, we’re here to help you take the next step.</p>
                </li>
                <li>
                  <div class="heading-5">Make critical decisions with confidence</div>
                  <p class="p-offset-1">The <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> online client portal, delivers the data that matters most.
                    Our single access point to timely, accurate data and powerful tools helps guide you through the day.</p>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Principles-->
      <section class="section section-lg bg-gray-100">
        <div class="container text-center text-lg-left">
          <h2><span class="text-light">Why choose Investment Services from </span> <?= $siteName; ?>?</h2>
          <div class="row row-30 number-counter-2">
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">Committed to your best interests</h5>
                  <div class="content"><?= $siteName; ?> keeps to the highest standards of ethics,
                    security and transparency. <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?> takes pride in maintaining this reputation and constantly backing it up.</div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">Offering proactive support</h5>
                  <div class="content">People make the difference.
                    <?= $siteName; ?> works to help you move forward, offering new ideas and potential opportunities along the way.</div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-numbered-left unit">
                <div class="unit-left">
                  <div class="index-counter"></div>
                </div>
                <div class="unit-body">
                  <h5 class="title">Tailored to your needs</h5>
                  <div class="content">At <?= implode(' ', array_slice(explode(' ', $siteName), 0, 1)); ?>, we spend time learning what you need, instead of trying to fit you into an existing box.
                    We work with you to craft flexible solutions that add value above and beyond.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
include 'footer.php';
?>