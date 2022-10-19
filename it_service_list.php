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
              <h1 class="page-title">Services List</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Services List</li>
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
      <?php 
      $result = mysqli_query($connect,'select * from our_services');
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
      <div class="col-md-4 service_blog margin_bottom_50">
        <div class="full">
          <div class="service_img"> <img class="img-responsive" src="images/it_service/<?php echo $row['image']; ?>" alt="#" /> </div>
          <div class="service_cont">
            <h3 class="service_head"><?php echo $row['title']; ?></h3>
            <p><?php echo $row['excerpt']; ?></p>
            <div class="bt_cont"> <a class="btn sqaure_bt" href="it_service_detail.php">View Service</a> </div>
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
      
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 light_silver">
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
<!-- end section -->
<!-- section -->
<?php 
include('pages/footer.php');
?>