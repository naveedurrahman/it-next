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
              <h1 class="page-title">Shop Page</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Shop</li>
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
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <?php 
          $result = mysqli_query($connect,'select * from our_products');
          while($row = mysqli_fetch_assoc($result))
          {
          ?>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/<?php echo $row['image']; ?>" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.php"><?php echo $row['title']; ?></a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price"><?php echo $row['old_price']; ?></span> – <span class="new_price"><?php echo $row['new_price']; ?></span></p>
                </div>
              </div>
            </div>
          </div>
          <?php 
          }
          ?>
        </div>
      </div>
      <!-- sidebar -->
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
      <!-- end sidebar -->
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<?php 
include('pages/footer.php');
?>
