<?php

include "./Admin/connection.php";

?>





<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Ecommerce Website</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

   <!-- header section start -->
   <div class="header_section haeder_main" enctype="multipart/form-data" method="POST">
      <div class="container-fluid">
         <nav class="navbar navbar-light bg-light justify-content-between">
            <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="index.php">Home</a>
               <a href="computers.php">Computers</a>
               <a href="mans_clothes.php">Mans Clothes</a>
               <a href="womans_clothes.php">Womans Clothes</a>
               <a href="contact.php">Contact</a>
            </div>
            <span style="font-size:30px;cursor:pointer; color: #fff;" onclick="openNav()"><img src="images/toggle-icon.png"></span>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a></a>
            <form class="form-inline ">
               <div class="login_text">
                  <ul>
                     <li><a href="#"><img src="images/user-icon.png"></a></li>
                     <li><a href="#"><img src="images/trolly-icon.png"></a></li>
                     <li><a href="#"><img src="images/search-icon.png"></a></li>
                  </ul>
               </div>
            </form>
         </nav>
      </div>
   </div>
   <!-- header section end -->










   <!-- banner section start -->
   <div class="banner_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">

            <?php
            $select = "SELECT * FROM `carousal`";
            $query = mysqli_query($conn, $select);
            $firstSlide = true; // Variable to track the first slide
            while ($fetch = mysqli_fetch_assoc($query)) {
               // Determine active class based on $firstSlide
               $active = $firstSlide ? 'active' : '';
               $firstSlide = false; // Set $firstSlide to false after the first iteration

            ?>

               <div class="carousel-item <?php echo $active; ?>">
                  <div class="container">
                     <div class="row border_1">
                        <div class="col-md-4">

                           <!-- <div class="image_1"> -->
                           <div class="">
                              <img src="./Admin/Corousel/Sidebar_Corosel_img/<?php echo $fetch['File_corousel_pic_grial']; ?>" alt=" YOUR First PIC " style="wixdth:100%;">
                           </div>
                        </div>


                        <div class="col-md-4">
                           <h1 class="banner_taital">Big Sale Offer</h1>
                           <div class="buynow_bt active"><a href="#">Buy Now</a></div>
                           <div class="contact_bt"><a href="contact.php">Contact Us</a></div>
                        </div>


                        <div class="col-md-4 my-3">
                           <div><img src="./Admin/Corousel/Sidebar_Corosel_computer/<?php echo $fetch['carousal_img_computer']; ?>" alt=" YOUR Computer PIC " style="width:100%; height:100%"></div>
                        </div>
                     </div>
                  </div>
               </div>

            <?php
            }
            ?>

         </div>
         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
         </a>
      </div>
   </div>
   <!-- banner section end -->







   <!-- =========================================================== -->








   <!-- catagary and Mobile section start -->
   <div class="catagary_section layout_padding">
      <div class="container">
         <div class="catagary_main">
            <div class="catagary_left">
               <h2 class="categary_text">Categary</h2>
            </div>
            <div class="catagary_right">
               <div class="catagary_menu">
                  <ul>
                     <li><a href="#">Man's Fashion</a></li>
                     <li><a href="#">Woman Fashion</a></li>
                     <li><a href="#">Beauty</a></li>
                     <li><a href="#">Mobiles</a></li>
                     <li><a href="#">Computers</a></li>
                     <li><a href="#">Watchs</a></li>
                     <li><a href="#">Kicthen</a></li>
                     <li><a href="#">Sports</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>





   <div class="catagary_section_2">
      <div class="container-fluid">
         <div class="row">

            <?php
            $select = "SELECT * FROM `wcommerce_website_table` ORDER BY `id` DESC";
            $query = mysqli_query($conn, $select);
            while ($fetch = mysqli_fetch_assoc($query)) {

            ?>
               <div class="col-md-3">
                  <div class="box_man">
                     <h3 class="mobile_text"><?php echo $fetch['Device_Name'] ?></h3>
                     <div class="mobile_img"><img src="./Admin/Mobile/admin_images/<?php echo $fetch['File']; ?>" alt="YOUR MOBILE PIC" style="height: 400px; width: 350px;"> </div>

                     <div class="cart_main">
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                        <h4 class="samsung_text"><?php echo $fetch['Device_Brand_Name'] ?></h4>
                        <h6 class="rate_text"><a href="#"><?php echo ' ₹ ' . $fetch['Price']; ?></a></h6>
                        <h6 class="rate_text_1"><?php echo ' ₹ ' . $fetch['Discount']; ?></h6>
                     </div>
                  </div>
               </div>


            <?php
            }
            ?>

         </div>



      </div>
   </div>
   <!-- catagary and Mobile section end -->








   <!-- ========================================================= -->








   <!-- computers section start -->
   <div class="computers_section layout_padding">
      <div class="container">
         <h1 class="computers_taital">Computers & Laptop</h1>
      </div>
   </div>
   <div class="computers_section_2">
      <div class="container-fluid">
         <div class="computer_main">
            <div class="row">

               <?php
               $computer_select = "SELECT * FROM `computer_laptop_table` ORDER BY `id` DESC";
               $computer_query = mysqli_query($conn, $computer_select);
               while ($fetch = mysqli_fetch_assoc($computer_query)) {

               ?>

                  <div class="col-md-4">
                     <div class="computer_img"><img src="./Admin/Computer_Laptop/Computer_Laptop_img/<?php echo $fetch['File']; ?>" alt="YOUR Computer PIC" style="height: 400px; width: 350px;"></div>
                     <h4 class="computer_text"><?php echo $fetch['Device_Name']; ?></h4>
                     <div class="computer_text_main">
                        <h4 class="dell_text"><?php echo $fetch['Device_Brand_Name']; ?></h4>
                        <h6 class="price_text"><a href="#"><?php echo " ₹ " . $fetch['Price']; ?> </a></h6>
                        <h6 class="price_text_1"><a href="#"><?php echo " ₹ " .  $fetch['Discount']; ?></a></h6>
                     </div>
                     <div class="cart_bt_1"><a href="#">Add To Cart</a></div>
                  </div>

               <?php
               }
               ?>


            </div>


         </div>
      </div>
   </div>
   <!-- computers section end -->







   <!-- mans clothes section start -->
   <div class="mans_section layout_padding">
      <div class="container">
         <h1 class="computers_taital">Man’s clothes</h1>
      </div>
   </div>

   <div class="mans_section_2">
      <div class="container-fluid">


         <?php
         $man_select = "SELECT * FROM `man_cloths` ORDER BY `id` DESC";
         $man_query = mysqli_query($conn, $man_select);
         $fetch = mysqli_fetch_assoc($man_query)

         ?>



         <div class="mans_main">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="offer_text">Best Offer Every Man’s Iteams</h1>
                  <p class="lorem_text">There are many variations of passages of Lorem Ipsum available,but the majority
                     have</p>
                  <div class="read_bt"><a href="#">Buy Now</a></div>
               </div>
               <div class="col-md-6">
                  <div class="image_3"><img src="./Admin/Man_cloth/Man_cloth_pics/<?php echo $fetch['man_img']; ?>" alt="MAN PIC" style="height: 400px; width: 350px;"></div>
               </div>
            </div>
         </div>




      </div>
   </div>
   <!-- mans clothes section end -->






   <!-- ================================================================= -->






   <!-- womans clothes section start -->
   <div class="computers_section layout_padding">
      <div class="container">

         <?php
         $select_women = "SELECT * FROM `womans_clothes` ORDER BY `id` DESC";

         $query_women = mysqli_query($conn, $select_women);

         // single pic ke liye *[ while loop ]* ki jarurat nahi padti hai...
         $fetch = mysqli_fetch_assoc($query_women)

         ?>

         <h1 class="womans_taital">woman’s clothes</h1>
         <div class="womans_section_2">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="Get_offer_text">Get <br>offer Every Iteams</h1>
                  <div class="read_bt"><a href="#">Buy Now</a></div>
               </div>
               <div class="col-md-6">
                  <div class="image_4"><img src="./Admin/Womans_clothes/womans_cloth_img/<?php echo $fetch['womans_img']; ?>" alt="YOUR MOBILE PIC" style="height: 400px; width: 350px;"></div>
               </div>
            </div>
         </div>



      </div>
   </div>
   <!-- womans clothes section end -->







   <!-- ------------------------------------------------------------- -->






   <!-- footer section start -->
   <div class="footer_section layout_padding margin_top_90">
      <div class="container">
         <div class="footer_logo_main">
            <div class="footer_logo"><a href="index.php"><img src="images/footer-logo.png"></a></div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src=""></a></li>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="https://www.linkedin.com/in/samir-burande-021a241a6/"><img src="images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  <li><a href="#"><img src="images/youtub-icon.png"></a></li>
               </ul>
            </div>
         </div>



         <div class="footer_section_2">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h4 class="adderss_text">About</h4>
                  <p class="ipsum_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h4 class="adderss_text">Menu</h4>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="computers.php">Computers</a></li>
                        <li><a href="Mans_clothes.php">Mans Clothes</a></li>
                        <li><a href="womans_clothes.php">Womans Clothes</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h4 class="adderss_text">Useful Link</h4>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="#">Adipiscing</a></li>
                        <li><a href="#">Elit, sed do</a></li>
                        <li><a href="#">Eiusmod</a></li>
                        <li><a href="#">Tempor</a></li>
                        <li><a href="#">incididunt</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h4 class="adderss_text">Contact</h4>
                  <div class="call_text"><img src="images/map-icon.png"><span class="paddlin_left_0"><a href="#">Nagpur Maharashtra</a></span></div>
                  <div class="call_text"><img src="images/call-icon.png"><span class="paddlin_left_0"><a href="#">8806925612</a></span></div>
                  <div class="call_text"><img src="images/mail-icon.png"><span class="paddlin_left_0"><a href="https://mail.google.com/mail/u/0/#inbox">ssburande98@gmail.com</a></span></div>
               </div>
            </div>


            <!-- # ebbed google map start.....  -->

            <div class="row">
               <div class="col-12">

                  <div class="gmap_canvas my-3 d-flex justify-content-center">
                     <iframe width="100%" height="225px" id="gmap_canvas" src="https://maps.google.com/maps?q=it+park+nagpur&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                     <br>
                  </div>
                  <a href="https://embedgooglemap.2yu.co"></a>
               </div>
            </div>
            <!-- google map end ..........     -->


         </div>
      </div>
   </div>
   <!-- footer section end -->




   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text"> @2023 Frica All right reserved <a href="https://github.com/sam-1998-web">Samir Burande
            </a></p>
      </div>
   </div>

   <!-- copyright section end -->








   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "100%";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>
   <!-- bootstrap 5 -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>