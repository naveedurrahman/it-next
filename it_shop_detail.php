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
              <h1 class="page-title">Shop Detail</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Shop Detail</li>
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
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="product_detail_feature_img hizoom hi2">
              <div class='hizoom hi2'> <img src="images/it_service/1.jpg" alt="#" /> </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
            <div class="product-heading">
              <h2>Norton Internet Security</h2>
            </div>
            <div class="product-detail-side"> <span><del>$25.00</del></span><span class="new-price">$20.00</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
            <div class="detail-contant">
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<br>
                <span class="stock">2 in stock</span> </p>
              <form class="cart" method="post" action="it_cart.html">
                <div class="quantity">
                  <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                </div>
                <button type="submit" class="btn sqaure_bt">Add to cart</button>
              </form>
            </div>
            <div class="share-post"> <a href="#" class="share-text">Share</a>
              <ul class="social_icons">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="tab_bar_section">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (2)</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <div class="product_desc">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. 
                        Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, 
                        id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.<br>
                        <br>
                        Vestibulum et ullamcorper ligula. Morbi bibendum tempor rutrum. 
                        Pelle tesque auctor purus id molestie ornare.Donec eu lobortis risus. Pellentesque sed aliquam lorem. Praesent pulvinar lorem vel mauris ultrices posuere. 
                        Phasellus elit ex, gravida a semper ut, venenatis vitae diam. Nullam eget leo massa. Aenean eu consequat arcu, vitae scelerisque quam. Suspendisse risus turpis, 
                        pharetra a finibus vitae, lobortis et mi.</p>
                    </div>
                  </div>
                  <div id="reviews" class="tab-pane fade">
                    <div class="product_review">
                      <h3>Reviews (2)</h3>
                      <div class="commant-text row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                          <div class="profile"> <img class="img-responsive" src="images/it_service/client1.png" alt="#"> </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                          <h5>David</h5>
                          <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                          <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                          <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                            The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. </p>
                        </div>
                      </div>
                      <div class="commant-text row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                          <div class="profile"> <img class="img-responsive" src="images/it_service/client2.png" alt="#"> </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8">
                          <h5>Jack</h5>
                          <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                          <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                          <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="full review_bt_section">
                            <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                          </div>
                          <div class="full">
                            <div id="collapseExample" class="full collapse commant_box">
                              <form accept-charset="UTF-8" action="index.html" method="post">
                                <input id="ratings-hidden" name="rating" type="hidden">
                                <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                <div class="full_bt center">
                                  <button class="btn sqaure_bt" type="submit">Save</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="main_heading text_align_left" style="margin-bottom: 35px;">
                <h3>Related products</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php 
          $result = mysqli_query($connect,'select * from our_products order by rand() limit 3');
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
      <!-- sidbar -->
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
include('pages/sub_footer.php');
?>
