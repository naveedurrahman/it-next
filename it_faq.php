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
              <h1 class="page-title">Faq</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Pages</li>
                <li class="active">Faq</li>
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
      <div class="col-md-9">
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-12">
            <div class="full margin_bottom_30">
              <div class="accordion border_circle">
                <div class="bs-example">
                  <div class="panel-group" id="accordion" style="margin-top: 0;">

                  <?php 
                    $result = mysqli_query($connect,'select * from some_accordion');
                    while($row = mysqli_fetch_assoc($result))
                    {
                    ?>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row['collapse']; ?>"><i class="<?php echo $row['icon']; ?>" aria-hidden="true"></i><?php echo $row['title']; ?><i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="<?php echo $row['collapse']; ?>" class="panel-collapse collapse">
                        <div class="panel-body">
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
      <!-- side bar  -->
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
          <!-- get a quote -->
          <div class="side_bar_blog">
            <?php 
            $result = mysqli_query($connect,'select * from get_quote');
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <h4><?php echo $row['title']; ?></h4>
            <p><?php echo $row['text']; ?></p>
            <?php 
            }
            ?>
            <a class="btn sqaure_bt" href="it_service.html">View Service</a> 
          </div>
          <!-- end get a quote -->
          <!-- our service links -->
          <div class="side_bar_blog">
            <h4>OUR SERVICE</h4>
            <div class="categary">
              <ul>
                <?php 
                $result =mysqli_query($connect,'select * from our_services_links');
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <li><a href="<?php echo $row['links']; ?>"><i class="fa fa-angle-right"></i><?php echo $row['title']; ?></a></li>
                <?php 
                }
                ?>
              </ul>
            </div>
          </div>
          <!-- end our service links -->
          <!-- recent news links -->
          <div class="side_bar_blog">
            <h4>RECENT NEWS</h4>
            <div class="categary">
              <ul>
                <?php 
                $result = mysqli_query($connect,'select * from recent_news_links');
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <li><a href="<?php echo $row['links']; ?>"><i class="fa fa-angle-right"></i><?php echo $row['title']; ?></a></li>
                <?php 
                }
                ?>
                
              </ul>
            </div>
          </div>
          <!-- end recent news links -->
          <!-- tags links -->
          <div class="side_bar_blog">
            <h4>TAG</h4>
            <div class="tags">
              <ul>
                <?php 
                $result = mysqli_query($connect,'select * from tag_links');
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <li><a href="<?php echo $row['links']; ?>"><?php echo $row['title']; ?></a></li>
                <?php 
                }
                ?>
              </ul>
            </div>
          </div>
          <!-- end tags links -->

        </div>
      </div>
      <!-- end side bar -->
    </div>
  </div>
</div>
<!-- end section -->
<?php 
include('pages/footer.php');
?>