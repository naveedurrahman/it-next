<?php
include("db.php");
include('pages/head.php');
include('pages/header.php');
?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Our Pricing</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Pages</li>
                <li class="active">Pricing</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Our Pricing Plans</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- full price table -->
        <div class="price_table row" style="margin-top: 0;">
          <!-- price table one -->
          <?php
          $counter = 1;
          $result = mysqli_query($connect, "select * from pricing_plan");
          while ($rows = mysqli_fetch_assoc($result)) {

          ?>
            <?php

            if ($counter == 2) {
              echo "<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 price_table_active'>";
            } else {
              echo "<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 '>";
            }
            ?>
            <div class="price_table_inner margin_bottom_30">

              <?php

              if ($counter == 2) {
                echo "<div class='price_head text_align_center white_fonts'>";
              } else {
                echo "<div class='price_head text_align_center'>";
              }
              $counter++;
              ?>

              <h5><?php echo $rows['title'];   ?></h5>
              <p><?php echo $rows['text'];   ?></p>
            </div>
            <div class="price_contant">
              <div class="center">
                <p class="price_amount"><?php echo $rows['amount_in'];   ?> <span class="price_no"><?php echo $rows['amount'];   ?></span>/<?php echo $rows['per'];   ?></p>
              </div>
              <div class="price_cont text_align_center">
                <p><?php echo $rows['offer_one'];   ?></p>
                <p><?php echo $rows['offer_two'];   ?></p>
                <p><?php echo $rows['offer_three'];   ?></p>
                <p><?php echo $rows['offer_four'];   ?></p>
              </div>
            </div>
            <div class="price_bottom">
              <div class="center"> <a href="#" class="btn dark_gray_bt">Get Started</a> </div>
            </div>
        </div>
      </div>
    <?php

          }
    ?>
    <!-- end price table three -->
    </div>
    <!-- end full price table -->
  </div>
</div>
</div>
</div>
<!-- end section -->
<!-- section -->
<?php
include('pages/footer.php');
?>