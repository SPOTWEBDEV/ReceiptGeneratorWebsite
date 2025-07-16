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
  <link rel="icon" href="https://admin.pixelstrap.net/<?php echo $sitename ?>/assets/svg/landing-icons.svg">
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
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $domain ?>#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="">Mission</a></li>
            
                <!-- <li class="nav-item"><a class="nav-link" href="https://docs.pixelstrap.net/admin/<?php echo $sitename ?>/document/" target="_blank"></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.pixelstrap.com/hire-us" target="_blank"></a></li> -->
              </ul>
              <div class="buy-block"><a class="btn-landing bg-secondary text-white" href="./login/index.php">Login</a>
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
              <p class="description-name"><?php echo $sitename ?> is the ideal solution for any business that needs quick and professional receipts. It comes with all the features you need to generate, print, and manage receipts effortlessly — whether you're a freelancer, small shop owner, or service provider..</p>
              <div class="docutment-button"> <a class="btn bg-secondary" href="./sign-up/">Get Started</a><a class="btn bg-light txt-dark" href="./login/">Login</a></div>
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
              <h3 id="about">About Us</h3>
              <span>We provide an easy-to-use platform that allows individuals and businesses to build and create professional receipts effortlessly. Our goal is to simplify your transaction records with tools that are fast, flexible, and user-friendly.
                Our platform empowers both individuals and businesses to design polished and accurate receipts with ease. We’re committed to making your record-keeping seamless through simple, efficient, and adaptable tools designed for everyday use.
                Whether you're running a business or managing personal expenses, our intuitive system makes receipt creation stress-free. With customizable options and a smooth workflow, staying organized has never been easier.
                Create sleek, reliable receipts in just a few clicks. We’ve built our tools with simplicity in mind, so anyone—from freelancers to large teams—can generate receipts that look professional and meet their needs quickly and efficiently.</span><a class="btn link-text btn-primary" href="./login/index.php">Get Started</a>
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
                <div class="<?php echo $sitename ?>-demo-img">
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
                <div class="<?php echo $sitename ?>-demo-img">
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
            <div class="premium-img"><img class="img-fluid" src="./assets/images/landing/premium.png" alt="premium"></div>
          </div>
          <div class="col-md-6 wow bounceInRight mt-0">
            <div class="premium-wrapper">
              <h3 id="">Our Mission</h3>
              <span>Our mission is to make receipt creation simple and accessible for everyone. Whether you're a freelancer, a shop owner, or a business manager, we aim to eliminate manual paperwork and help you generate clean, organized receipts in just a few clicks.
                We’re driven by the goal of making receipt generation effortless for people in all industries. From independent workers to growing businesses, our tools are designed to reduce time spent on paperwork and boost productivity with just a few simple steps.
                At the heart of what we do is the desire to remove the stress of creating receipts. We believe that anyone, regardless of their technical skills, should be able to produce neat, professional-looking records without hassle or delay.
                We understand how important clear records are for any operation. That’s why we’ve built a system that removes the complexity and replaces it with speed, accuracy, and simplicity—making professional receipt creation available to all.</span><a class="btn link-text btn-primary" href="./login/index.php">Get Started</a>
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
                  <div class="demo-detail"><a class="btn btn-primary btn-primary" href="knowledgebase.html" target="_blank">Knowledgebase </a></div>
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
                  <div class="demo-detail"><a class="btn btn-primary btn-primary" href="letter-box.html" target="_blank">Letter Box </a></div>
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
                  <div class="demo-detail"><a class="btn btn-primary btn-primary" href="product-page.html" target="_blank">Ecommerce </a></div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                <div class="demo-box">
                  <div class="img-wrraper"><a href="kanban.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/8.jpg" alt=""></a></div>
                  <div class="demo-detail"><a class="btn btn-primary btn-primary" href="kanban.html" target="_blank">Kanban </a></div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-sm-6 col-lg-4 col-sm-6 wow pulse">
                <div class="demo-box">
                  <div class="img-wrraper"><a href="file-manager.html" target="_blank"><img class="img-fluid" src="./assets/images/landing/application/9.jpg" alt=""></a></div>
                  <div class="demo-detail"><a class="btn btn-primary btn-primary" href="file-manager.html" target="_blank">File Manager </a></div>
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
                  <div class="demo-detail"><a class="btn btn-primary btn-primary" href="contacts.html" target="_blank">Contacts </a></div>
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
              <h3>Who we are</h3>
              <span>We are a team of passionate developers, designers, and thinkers focused on solving real-world problems with technology. With a strong belief in simplicity and efficiency, we are committed to helping users take control of their finances through modern digital tools.
                Our team is made up of dedicated creatives and problem-solvers who thrive on using technology to make everyday tasks easier. We believe that smart tools should be easy to use, and we build with the goal of empowering users to manage their financial records confidently.
                Driven by innovation and clarity, we bring together experts from different fields to create solutions that truly matter. Our mission is to simplify complex tasks and make financial management smoother for everyone through intuitive design and functionality.
                We’re a collective of tech-savvy professionals who care about making a real difference. By combining creativity, experience, and user-centered thinking, we deliver digital tools that help individuals and businesses handle their finances with ease and control.

              </span><a class="btn link-text btn-primary" href="./login/index.php">Get Started</a>
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
              <h2>The <?php echo $sitename ?> Receipt Generator Platform — Trusted by Businesses for Creating Professional Receipts Effortlessly.</h2>
              <div class="footer-rating">
                <svg class="fill-warning">
                  <use href="https://admin.pixelstrap.net/<?php echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                </svg>
                <svg class="fill-warning">
                  <use href="https://admin.pixelstrap.net/<?php echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                </svg>
                <svg class="fill-warning">
                  <use href="https://admin.pixelstrap.net/<?php echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                </svg>
                <svg class="fill-warning">
                  <use href="https://admin.pixelstrap.net/<?php echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                </svg>
                <svg class="stroke-warning">
                  <use href="https://admin.pixelstrap.net/<?php echo $sitename ?>/assets/svg/icon-sprite.svg#fill-star"></use>
                </svg>
              </div>
            </div><a class="btn bg-primary btn-hover-effect txt-light" href="./login/index.php">Login</a>
          </div>
        </div>
        <div class="sub-footer row g-md-2 g-3">
          <div class="col-md-6">
            <div class="left-subfooter"> <img style="height: 100px;" class="img-fluid" src="<?php echo $domain ?>assets/images/logo.png" alt="logo">
              <p class="mb-0">Copyright 2025 © <?php echo $sitename ?> – All rights reserved</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-subfooter">
              <h3 class="text-end">Help others discover Smart InvoiceX — share it with someone who needs simple receipt tools.</h3>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#/<?php echo $sitename ?>/document/">About us </a></li>
                <li><a href="#">Contact us</a></li>
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