<?php

include("../../server/connection.php")



?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/<?php  echo $sitename ?>/template/projectcreate.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:25:32 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php  echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, <?php  echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title><?php  echo $sitename ?> - Premium Admin Template</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/dropzone.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper default-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index-2.html"> <img class="img-fluid for-light" src="../../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../../assets/images/logo/logo_dark.png" alt=""></a></div>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle"> 
                <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#stroke-animation"></use>
              </svg>
            </div>
          </div>
          <form class="col-sm-4 form-inline search-full d-none d-xl-block" action="#" method="get">
            <div class="form-group">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search .." name="q" title="" autofocus>
                  <svg class="search-bg svg-color">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#search"></use>
                  </svg>
                </div>
              </div>
            </div>
          </form>
          <div class="nav-right col-xl-8 col-lg-12 col-auto pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="serchinput">
                <div class="serchbox">
                  <svg>
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#search"></use>
                  </svg>
                </div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
              <li class="onhover-dropdown"> 
                <div class="notification-box">
                  <svg> 
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#Bell"></use>
                  </svg>
                </div>
                <div class="onhover-show-div notification-dropdown"> 
                  <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
                  <div class="notification-card">
                    <ul>
                      <li>
                        <div class="user-notification">
                          <div><img src="../../assets/images/avtar/2.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>You have new finical page design.</h4></a><span>Today 11:45pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="index-2.html"> <span>Show</span></a></div>
                      </li>
                      <li>
                        <div class="user-notification">
                          <div><img src="../../assets/images/avtar/17.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>Congrats! you all task for today.</h4></a><span>Today 01:05pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="index-2.html"> <span>Show</span></a></div>
                      </li>
                      <li> 
                        <div class="user-notification">
                          <div> <img src="../../assets/images/avtar/18.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>You have new in landing page design.</h4></a><span>Today 06:55pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="index-2.html"> <span>Show</span></a></div>
                      </li>
                      <li>
                        <div class="user-notification">
                          <div><img src="../../assets/images/avtar/19.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>Congrats! you all task for today.</h4></a><span>Today 06:55pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"> <a href="index-2.html"> <span>Show</span></a></div>
                      </li>
                      <li> <a class="f-w-700" href="letter-box.html">Check all </a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="onhover-dropdown">
                <svg>
                  <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#Bookmark"></use>
                </svg>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                        <ul class="bookmark-dropdown">
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><a href="form-validation.html">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-primary"><i data-feather="file-text"></i></div><span>Forms</span>
                                  </div></a></div>
                              <div class="col-4 text-center"><a href="user-profile.html">
                                  <div class="bookmark-content"> 
                                    <div class="bookmark-icon bg-light-secondary"><i data-feather="user"></i></div><span>Profile</span>
                                  </div></a></div>
                              <div class="col-4 text-center"><a href="bootstrap-basic-table.html">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-warning"> <i data-feather="server"> </i></div><span>Tables </span>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="text-centermedia-body"> <a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="onhover-dropdown"> 
                <div class="message position-relative">
                  <svg>
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#Message"></use>
                  </svg><span class="rounded-pill badge-danger"></span>
                </div>
                <div class="onhover-show-div message-dropdown">
                  <h6 class="f-18 mb-0 dropdown-title">Message                               </h6>
                  <ul>
                    <li>
                      <div class="d-flex align-items-start">
                        <div class="message-img bg-light-primary"><img src="../../assets/images/user/3.jpg" alt=""></div>
                        <div class="flex-grow-1">
                          <h5><a href="letter-box.html">Emay Walter</a></h5>
                          <p>Do you want to go see movie?</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-start">
                        <div class="message-img bg-light-primary"><img src="../../assets/images/user/6.jpg" alt=""></div>
                        <div class="flex-grow-1">
                          <h5> <a href="letter-box.html">Jason Borne</a></h5>
                          <p>Thank you for rating us.</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-start"> 
                        <div class="message-img bg-light-primary"><img src="../../assets/images/user/10.jpg" alt=""></div>
                        <div class="flex-grow-1">
                          <h5> <a href="letter-box.html">Sarah Loren</a></h5>
                          <p>What`s the project report update?</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                      </div>
                    </li>
                    <li> <a class="f-w-700" href="private-chat.html">Check all</a></li>
                  </ul>
                </div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box"> 
                  <svg>
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#Buy"></use>
                  </svg>
                </div>
                <div class="cart-dropdown onhover-show-div">
                  <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                  <ul>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 img-50" src="../../assets/images/ecommerce/05.jpg" alt="">
                        <div class="flex-grow-1"> <span>Women's Track Suit</span>
                          <h6 class="font-primary">8 x $65.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-primary" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 img-50" src="../../assets/images/ecommerce/02.jpg" alt="">
                        <div class="flex-grow-1"><span>Men's Jacket</span>
                          <h6 class="font-primary">10 x $50.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-primary" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li class="total">
                      <h6 class="mb-0">Order Total :<span class="f-right">$1020.00</span></h6>
                    </li>
                    <li class="text-center"> <a href="cart.html">
                        <button class="btn btn-outline-primary" type="button">View Cart</button></a><a class="btn btn-primary view-checkout" href="checkout.html">Checkout  </a></li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="mode">
                  <svg class="for-dark">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#moon"></use>
                  </svg>
                  <svg class="for-light">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#Sun"></use>
                  </svg>
                </div>
              </li>
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-gb"></i><span class="lang-txt box-col-none">EN            </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="d-flex align-items-center profile-media"><img class="b-r-25" src="../../assets/images/dashboard/profile.png" alt="">
                  <div class="flex-grow-1 user"><span>Helen Walter</span>
                    <p class="mb-0 font-nunito">Admin 
                      <svg>
                        <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#header-arrow-down"></use>
                      </svg>
                    </p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="login.html"> <i data-feather="log-in"></i><span>Log Out</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">              
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
     <?php include("../include/sidenav.php") ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
        <?php include("../include/title.php") ?>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="form theme-form">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Project Title</label>
                            <input class="form-control" type="text" placeholder="Project name *">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Client name</label>
                            <input class="form-control" type="text" placeholder="Name client or company name">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Project Rate</label>
                            <input class="form-control" type="text" placeholder="Enter project Rate">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Project Type</label>
                            <select class="form-select">
                              <option>Hourly</option>
                              <option>Fix price</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Priority</label>
                            <select class="form-select">
                              <option>Low</option>
                              <option>Medium</option>
                              <option>High</option>
                              <option>Urgent</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Project Size</label>
                            <select class="form-select">
                              <option>Small</option>
                              <option>Medium</option>
                              <option>Big</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Starting date</label>
                            <input class="datepicker-here form-control" type="text" data-language="en">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Ending date</label>
                            <input class="datepicker-here form-control" type="text" data-language="en">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Enter some Details</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col custom-dropzone-project">
                          <div class="mb-3">
                            <label>Upload project file</label>
                            <form class="dropzone" id="singleFileUpload" action="https://admin.pixelstrap.net/upload.php">
                              <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                                <h4>Drop files here or click to upload.</h4><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="text-end"><a class="btn btn-success me-3" href="#">Add</a><a class="btn btn-danger" href="#">Cancel</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-copyright">
                <p class="mb-0">Copyright 2025 © <?php  echo $sitename ?> theme by pixelstrap.</p>
              </div>
              <div class="col-md-6 p-0">
                <p class="heart mb-0">Hand crafted &amp; made with
                  <svg class="footer-icon">
                    <use href="https://admin.pixelstrap.net/<?php  echo $sitename ?>/assets/svg/icon-sprite.svg#heart"></use>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../../assets/js/scrollbar/simplebar.js"></script>
    <script src="../../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../../assets/js/sidebar-menu.js"></script>
    <script src="../../assets/js/sidebar-pin.js"></script>
    <script src="../../assets/js/slick/slick.min.js"></script>
    <script src="../../assets/js/slick/slick.js"></script>
    <script src="../../assets/js/header-slick.js"></script>
    <script src="../../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../../assets/js/dropzone/dropzone.js"></script>
    <script src="../../assets/js/dropzone/dropzone-script.js"></script>
    <script src="../../assets/js/typeahead/handlebars.js"></script>
    <script src="../../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../assets/js/script.js"></script>
    <script src="../../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.net/<?php  echo $sitename ?>/template/projectcreate.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:25:33 GMT -->
</html>