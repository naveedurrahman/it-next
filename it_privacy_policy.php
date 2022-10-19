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
              <h1 class="page-title">Privacy policy</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Pages</li>
                <li class="active">Privacy policy</li>
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
<div class="section padding_layout_1 it_service_policy">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <?php 
          $result = mysqli_query($connect,'select * from privacy_policy');
          while($row = mysqli_fetch_assoc($result))
          {
          ?>
          <div class="col-md-12">
            <div class="full">
              <h3><?php echo $row['title']; ?></h3>
              <p><?php echo $row['detail']; ?></p>
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
            <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>
          <div class="side_bar_blog">
            <h4>OUR SERVICE</h4>
            <div class="categary">
              <ul>
                <?php 
                $result = mysqli_query($connect,'select * from our_services_links');
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