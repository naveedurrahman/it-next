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
              <h1 class="page-title">About Us</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">About Us</li>
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
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>We are Leading Company</h2>
            <p class="large">Fastest repair service with best price!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3>What we do</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown printer took a galley..</p>
          <ul>
            <li><i class="fa fa-check-circle"></i>Persius appetere pro mea harum ridens</li>
            <li><i class="fa fa-check-circle"></i>Instructior vis at causae legimus luptatum mel</li>
            <li><i class="fa fa-check-circle"></i>Maluisset id persius appetere pro mea harum</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="images/it_service/post-06.jpg" alt="#" /> </div>
      </div>
    </div>
    <div class="row" style="margin-top: 35px">
      <div class="col-md-8">
        <div class="full margin_bottom_30">
          <div class="accordion border_circle">
            <div class="bs-example">
              <div class="panel-group" id="accordion">
                <?php 
                $result = mysqli_query($connect,'select * from some_accordion');
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#<?php  echo $row['collapse'];  ?>"><i class="<?php  echo $row['icon'];  ?>" aria-hidden="true"></i><?php  echo $row['title'];  ?><i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="<?php  echo $row['collapse'];  ?>" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p><?php  echo $row['detail'];  ?></p>
                    </div>
                  </div>
                </div>
                <?php 
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
      <?php 
        $result = mysqli_query($connect,"select * from file_recovery");
        while($rows=mysqli_fetch_assoc($result))
        {        
        ?>
        <div class="full" style="margin-top: 35px;">
          <h3><?php echo $rows['title']; ?></h3>
          <p><?php echo $rows['detail']; ?> </p>
          <p><a class="btn main_bt" href="#">Read More</a></p>
        </div>
        <?php 
        }
        ?>
      </div>

    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>About Service</h2>
            <p class="large">Easy and effective way to get your device repaired.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <?php 
          $result = mysqli_query($connect,'select * from about_services');
          while($row = mysqli_fetch_assoc($result))
          {
          ?>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="<?php echo $row['icon']; ?>"></i></div>
                <h4 class="service-heading"><?php echo $row['title']; ?></h4>
                <p><?php echo $row['detail']; ?></p>
              </div>
            </div>
          </div>
          <?php 
          }
          ?>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Experienced Staff</h2>
            <p class="large">Our experts have been featured in press numerous times.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php 
      $result = mysqli_query($connect,'select * from our_staff');
      while($row = mysqli_fetch_assoc($result))
      {    
      ?>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="images/it_service/<?php echo $row['image']; ?>" alt="#"> </div>
          <div class="team_feature_head">
            <h4><?php echo $row['name']; ?></h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="<?php echo $row['facebook_id']; ?>" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="<?php echo $row['google_plus_id']; ?>" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="<?php echo $row['twitter_id']; ?>" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="<?php echo $row['linkedin_id']; ?>" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="<?php echo $row['instagram_id']; ?>" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
      
    </div>
  </div>
</div>
<!-- section -->
<?php 
include('pages/footer.php');
?>