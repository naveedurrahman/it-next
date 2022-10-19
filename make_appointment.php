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
              <h1 class="page-title">Make	Appointment</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Make	Appointment</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>Make	Appointment</h2>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
              <div class="form_section">
                <form class="form_contant" action="#" method="POST">
                  <fieldset class="row">
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="First Name*" type="text" required name="fname">
                  </div>
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Last Name" type="text" required name="lname">
                  </div>
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Your Email" type="email" required name="email">
                  </div>
                  <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Your Phone Number" type="text" required name="phone">
                  </div>
                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Subject" type="text" required name="subject">
                  </div>
                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea class="field_custom" placeholder="Description" required name="description"></textarea>
                  </div>
                  <div class="center">
                    <button class="btn main_bt" name="done">SUBMIT NOW</button>
                    <span>
                      <?php 
                      if(isset($_POST['done']))
                      {
                         $fname = $_POST['fname'];
                         $lname = $_POST['lname'];
                         $email = $_POST['email'];
                         $phone = $_POST['phone'];
                         $subject = $_POST['subject'];
                         $description = $_POST['description'];

                         mysqli_query($connect,"insert into make_appointment values('','$fname','$lname','$email','$phone','$subject','$description')");
                         echo "<p class='text-info mt-4 ml-5'poloRecord added</p>";
                      }
                      
                      
                      ?>
                    </span>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section -->
<?php 
include('pages/footer.php');
include('pages/sub_footer.php');
?>
