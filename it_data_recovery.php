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
              <h1 class="page-title">Data Recovery</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Data Recovery</li>
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
      <div class="col-md-9">
        <div class="row">
          <?php 
          $result = mysqli_query($connect,'select * from our_services order by rand() limit 4');
          while($row = mysqli_fetch_assoc($result))
          {
          ?>
          <div class="col-md-6 service_blog margin_bottom_50">
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
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-12">
            <div class="full margin_bottom_30">
              <div class="accordion border_circle">
                <div class="bs-example">
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                            over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Recovery Photo, Image, Video and Audio<i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                            over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i> Mobile Phone Recovery<i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                            over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                            over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
          $result = mysqli_query($connect,'select * from service_process order by rand() limit 3');
          while($row = mysqli_fetch_assoc($result))
          {
          ?>
          <div class="col-md-4">
            <div class="full">
              <div class="service_blog_inner">
                <div class="icon text_align_left"><img src="images/it_service/<?php echo $row['icon']; ?>" alt="#"></div>
                <h4 class="service-heading"><?php echo $row['title']; ?></h4>
                <p><?php echo $row['detail']; ?></p>
              </div>
            </div>
          </div>
          <?php 
          }
          ?>

          <?php 
          $result = mysqli_query($connect,'select * from file_recovery');
          while($row = mysqli_fetch_assoc($result))
          {
          ?>
          <div class="col-md-12">
            <div class="full" style="margin-top: 15px;">
              <h3><?php echo $row['title']; ?></h3>
              <p><?php echo $row['detail']; ?></p>
              <p><a class="btn main_bt" href="#">Read More</a></p>
            </div>
          </div>
          <?php 
          }
          ?>

        </div>
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
          $result = mysqli_query($connect,'select * from our_staff order by rand() limit 3');
          while($row = mysqli_fetch_assoc($result))
          {
          ?>
          <div class="col-md-4 col-sm-6">
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
      <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>SEARCH</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>GET A QUOTE</h4>
            <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
            <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>
          <div class="side_bar_blog">
            <h4>OUR SERVICE</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Technical support</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>RECENT NEWS</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Land lights let be divided</a></li>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Seasons over bearing air</a></li>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Greater open after grass</a></li>
                <li><a href="it_data_recovery.php"><i class="fa fa-angle-right"></i> Gathered was divide second</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>TAG</h4>
            <div class="tags">
              <ul>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<?php 
include('pages/footer.php');
?>
