<?php

include("./server/connection.php");



?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $sitename    ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, <?php echo $sitename    ?>  admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <title><?php echo $sitename ?> - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&amp;family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Nunito:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&amp;family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700;9..40,800&amp;family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Nunito:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/icofont.css">
    <link rel="icon" href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/landing-icons.svg">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/animate.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/owlcarousel.css">
  </head>
  <body class="landing-page">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="landing-page"> 
      <!-- Page Body Start-->
      <header class="landing-header">
        <div class="custom-container">
          <div class="row">
            <div class="col-12 p-0">
              <nav class="navbar navbar-light p-0" id="navbar-example2"><a class="navbar-brand" href="javascript:void(0)">
                <img style="height:80px" class="img-fluid" src="./assets/images/logo.png" alt=""></a>
                <!-- <h1 class="img-fluid" style="font-size: 20px;">Smar InoiceX</h1> -->
                <ul class="landing-menu nav nav-pills">
                  <li class="nav-item menu-back">back<i class="fa fa-angle-right"></i></li>
                  <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#framework">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="#corefeature">Example</a></li>
                  <li class="nav-item"><a class="nav-link" href="#Applications">Contact</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="https://docs.pixelstrap.net/admin/<?php  echo $sitename ?>/document/" target="_blank"></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.pixelstrap.com/hire-us" target="_blank"></a></li> -->
                </ul>
                <div class="buy-block"><a class="btn-landing bg-secondary text-white" href="./login/index.php" >Login</a>
                  <div class="toggle-menu"><i class="fa fa-bars"></i></div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- header end-->
      <!-- landing home start-->
      <div class="landing-home section-py-space pb-0">
        <div class="home-bg" id="home">
          <ul class="bg-icon-images">
            <li><img src="./assets/images/landing/landing-home/vector/3.png" alt=""></li>
            <li> <img src="./assets/images/landing/landing-home/vector/2.png" alt=""></li>
            <li><img src="./assets/images/landing/landing-home/vector/4.png" alt=""></li>
            <li><img src="./assets/images/landing/landing-home/vector/1.png" alt=""></li>
          </ul>
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-7">
              <div class="home-text">
                <div class="main-title"> 
                  <div class="d-flex align-items-center gap-2">
                
                  </div>
                </div>
                <h2><?php echo $sitename ?> Developer Friendly Receipt Generator For Your Business<img class="line-text img-fluid" src="./assets/images/landing/landing-home/vector/line.png" alt="line"></h2>
                <p class="description-name"><?php echo $sitename ?>  is the ideal solution for any business that needs quick and professional receipts. It comes with all the features you need to generate, print, and manage receipts effortlessly — whether you're a freelancer, small shop owner, or service provider..</p>
                <div class="docutment-button"> <a class="btn bg-secondary" href="./login/index.php" >Get Started</a><a class="btn bg-light txt-dark" href="./login/index.php<?php  echo $sitename ?>/document/">Login</a></div>
              </div>
            </div>
            <div class="col-lg-6 col-md-5">
              <div class="home-screen"> <a href="index-2.html"><img class="img-fluid dashboard-img img-fluid" src="./assets/images/landing/landing-home/dashboard.png" alt=""></a>
                <div class="charts-card">
                  <ul class="dashboard-card">
                    <li><img class="img-fluid" src="./assets/images/landing/landing-home/vector/5.png" alt=""></li>
                    <li><img class="img-fluid" src="./assets/images/landing/landing-home/vector/6.png" alt=""></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wave-vibe">
          <div class="wave-img"><img src="./assets/images/landing/landing-home/vector/7.png" alt=""></div>
        </div>
      </div>

    <!-- unicode stars here -->
 <section class="section-py-space premium-section">
        <div class="container">
          <div class="row g-md-4 g-3">
            <div class="col-md-6 wow bounceInLeft mt-0">
              <div class="premium-img"><img class="img-fluid" src="./assets/images/landing/premium.png" alt="premium"></div>
            </div>
            <div class="col-md-6 wow bounceInRight mt-0">
              <div class="premium-wrapper">
                <h3>About Us</h3>
                <span>We provide an easy-to-use platform that allows individuals and businesses to build and create professional receipts effortlessly. Our goal is to simplify your transaction records with tools that are fast, flexible, and user-friendly.</span><a class="btn link-text btn-primary" href="./login/index.php" >Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </section>
     <!-- unicode endes here -->

      <!-- demo section start-->
      <section class="demo-section section-py-space pt-0" id="demo">
        <div class="title text-center mt-0">
          <h5>Fast & Clean Receipt Generation</h5>
          <h2 class="mb-lg-2 mb-0">Simple, Professional & Easy-to-Use Layout</h2>
        </div>
        <div class="container">
          <div class="row demo-block demo-imgs">
            <div class="col-lg-6 col-sm-6 slideInUp wow">
              <div class="demo-box dashboard-images">
                <div class="layout-name">
                  <div class="<?php  echo $sitename ?>-demo-img">
                    <ul class="dot-group"> 
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div><a href="index-2.html" target="_blank">Default Dashboard</a>
                </div>
                <div class="img-wrraper"><a href="index-2.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/demo/1.jpg" alt=""></a></div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 slideInUp wow">
              <div class="demo-box dashboard-images">
                <div class="layout-name">
                  <div class="<?php  echo $sitename ?>-demo-img">
                    <ul class="dot-group">
                      <li> </li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div><a href="dashboard-02.html" target="_blank">Ecommerce Dashboard</a>
                </div>
                <div class="img-wrraper"><a href="dashboard-02.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/demo/2.jpg" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- unicode starts here -->
      <section class="section-py-space premium-section">
        <div class="container">
          <div class="row g-md-4 g-3">
            <div class="col-md-6 wow bounceInLeft mt-0">
              <div class="premium-img"><img class="img-fluid" src="data:image/jpeg;base64,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" alt="premium"></div>
            </div>
            <div class="col-md-6 wow bounceInRight mt-0">
              <div class="premium-wrapper">
                <h3 >Our Mission</h3>
              <span>Our mission is to make receipt creation simple and accessible for everyone. Whether you're a freelancer, a shop owner, or a business manager, we aim to eliminate manual paperwork and help you generate clean, organized receipts in just a few clicks.</span><a class="btn link-text btn-primary" href="./login/index.php" >Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </section>
     <!-- unicode endes here -->
  
      <!--Applications start-->
      <section class="section-py-space application-section" id="Applications">
        <div class="container-fluid fluid-space">
          <div class="row">
            <div class="col-sm-12 wow pulse">
              <div class="title text-center"> 
                <h5>Smart Receipt Tool</h5>
                <h2 class="mb-lg-2 mb-0">Fast, Reliable & Professional Receipts</h2>
              </div>
            </div>
            <div class="col-sm-12 application">
              <div class="row application-block g-5">
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="social-app.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/1.jpg" alt=""></a></div>
                    <div class="demo-detail"> <a class="btn btn-primary btn-primary" href="social-app.html" target="_blank">Social App</a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"> <a href="knowledgebase.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/2.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="knowledgebase.html" target="_blank">Knowledgebase  </a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="support-ticket.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/3.jpg" alt=""></a></div>
                    <div class="demo-detail"> <a class="btn btn-primary btn-primary" href="support-ticket.html" target="_blank">Support Ticket</a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="letter-box.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/4.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="letter-box.html" target="_blank">Letter Box                           </a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse"> 
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="to-do.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/5.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="to-do.html" target="_blank">To-Do</a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="job-cards-view.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/6.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="job-cards-view.html" target="_blank">Job Search</a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="product-page.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/7.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="product-page.html" target="_blank">Ecommerce                           </a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="kanban.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/8.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="kanban.html" target="_blank">Kanban                           </a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="file-manager.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/9.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="file-manager.html" target="_blank">File Manager                           </a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="projects.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/10.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="projects.html" target="_blank">Project </a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="contacts.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/11.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="contacts.html" target="_blank">Contacts                          </a></div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                  <div class="demo-box">
                    <div class="img-wrraper"><a href="private-chat.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/12.jpg" alt=""></a></div>
                    <div class="demo-detail"><a class="btn btn-primary btn-primary" href="private-chat.html" target="_blank">Chat</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    
      <!-- unic-cards end -->
      <section class="section-py-space premium-section">
        <div class="container">
          <div class="row g-md-4 g-3">
            <div class="col-md-6 wow bounceInLeft mt-0">
              <div class="premium-img"><img class="img-fluid" src="./assets/images/landing/premium.png" alt="premium"></div>
            </div>
            <div class="col-md-6 wow bounceInRight mt-0">
              <div class="premium-wrapper">
                <h3 >Who we are</h3>
               <span>We are a team of passionate developers, designers, and thinkers focused on solving real-world problems with technology. With a strong belief in simplicity and efficiency, we are committed to helping users take control of their finances through modern digital tools.</span><a class="btn link-text btn-primary" href="./login/index.php" >Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--footer start-->
      <footer class="footer-bg">
        <div class="container-fluid">
          <div class="landing-center">
            <div class="feature-content">
              <div>
                <h2>The <?php  echo $sitename ?> Receipt Generator Platform — Trusted by Businesses for Creating Professional Receipts Effortlessly.</h2>
                <div class="footer-rating">
                  <svg class="fill-warning">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                  </svg>
                  <svg class="fill-warning">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                  </svg>
                  <svg class="fill-warning">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                  </svg>
                  <svg class="fill-warning">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                  </svg>
                  <svg class="stroke-warning">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                  </svg>
                </div>
              </div><a class="btn bg-primary btn-hover-effect txt-light" href="./login/index.php">Login</a>
            </div>
          </div>
          <div class="sub-footer row g-md-2 g-3">
            <div class="col-md-6"> 
              <div class="left-subfooter"> <img style="height: 100px;" class="img-fluid" src="<?php echo $domain ?>assets/images/logo.png" alt="logo">
                <p class="mb-0">Copyright 2025 © <?php  echo $sitename ?> – All rights reserved</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-subfooter">
                <h3 class="text-end">Help others discover Smart InvoiceX — share it with someone who needs simple receipt tools.</h3>
                <ul>
                  <li><a href="#" >Home</a></li>
                  <li><a href="#/<?php  echo $sitename ?>/document/" >About us </a></li>
                  <li><a href="#" >Contact us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- latest jquery-->
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="./assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="./assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Plugins JS start-->
    <script src="./assets/js/tooltip-init.js"></script>
    <script src="./assets/js/animation/wow/wow.min.js"></script>
    <script src="./assets/js/landing_sticky.js"></script>
    <script src="./assets/js/landing.js"></script>
    <script src="./assets/js/jarallax_libs/libs.min.js"></script>
    <script src="./assets/js/slick/slick.min.js"></script>
    <script src="./assets/js/slick/slick.js"></script>
    <script src="./assets/js/landing-slick.js"></script>
    <!-- Plugins JS Ends-->
    <script src="./assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="./assets/js/owlcarousel/owl-custom.js"></script>
  </body>


</html>