<!-- for active link -->
<?php 
   $activePage = basename($_SERVER['PHP_SELF'], ".php");
 ?>

<body id="default_theme" class="it_service it_serv_shopping_cart shopping-cart it_checkout checkout_page">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <?php 
                $result = mysqli_query($connect,'select * from social_icon');
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <li><a class="<?php echo $row['icon']; ?>" href="<?php echo $row['link']; ?>" title="<?php echo $row['name']; ?>" target="_blank"></a></li>
                <?php 
                }
                ?>
                
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="make_appointment.php">Make Appointment</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.php"><img src="images/logos/it_logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a></li>
                <li><a class="<?= ($activePage == 'it_about') ? 'active':''; ?>" href="it_about.php">About Us</a></li>
                <li> <a class="<?= ($activePage == 'it_service') ? 'active':''; ?>" href="it_service.php">Service</a>
                  <ul>
                    <li><a class="<?= ($activePage == 'it_service_list') ? 'active':''; ?>" href="it_service_list.php">Services list</a></li>
                    <li><a class="<?= ($activePage == 'it_service_detail') ? 'active':''; ?>" href="it_service_detail.php">Services Detail</a></li>
                  </ul>
                </li>
                <li> <a class="<?= ($activePage == 'it_blog') ? 'active':''; ?>" href="it_blog.php">Blog</a>
                  <ul>
                    <li><a  href="it_blog.php">Blog List</a></li>
                    <li><a  href="it_blog_grid.php">Blog Grid</a></li>
                    <li><a  href="it_blog_detail.php">Blog Detail</a></li>
                  </ul>
                </li>
                <li> <a class="<?= ($activePage == 'it_career') ? 'active':''; ?>" href="it_career.php">Pages</a>
                  <ul>
                    <li><a href="it_career.php">Career</a></li>
                    <li><a href="it_price.php">Pricing</a></li>
                    <li><a href="it_faq.php">Faq</a></li>
                    <li><a href="it_privacy_policy.php">Privacy Policy</a></li>
                    <li><a href="it_error.php">Error 404</a></li>
                  </ul>
                </li>
                <li> <a class="<?= ($activePage == 'it_shop') ? 'active':''; ?>" href="it_shop.php">Shop</a>
                  <ul>
                    <li><a href="it_shop.php">Shop List</a></li>
                    <li><a href="it_shop_detail.php">Shop Detail</a></li>
                    <li><a href="it_cart.php">Shopping Cart</a></li>
                    <li><a href="it_checkout.php">Checkout</a></li>
                  </ul>
                </li>
                <li> <a class="<?= ($activePage == 'it_contact') ? 'active':''; ?>" href="it_contact.php">Contact</a></li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>