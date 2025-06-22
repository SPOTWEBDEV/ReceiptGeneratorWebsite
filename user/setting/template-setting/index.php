<?php

include("../../../server/connection.php")



?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/<?php  echo $sitename ?>/template/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:24:56 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php  echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, <?php  echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <title><?php  echo $sitename ?> - Premium Admin Template</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../../../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/responsive.css">
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
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

    
      <!-- Page Header Start-->
      <?php  include('../../include/nav.php') ?>
      <!-- Page Header Ends  -->

      <!-- Page Body Start-->
      <div class="page-body-wrapper">


        <!-- Page Sidebar Start-->
         <?php  include('../../include/sidenav.php') ?>
        <!-- Page Sidebar Ends-->


        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                  <h3>Edit Profile</h3>
                </div>
                <div class="col-5 d-none d-xl-block">
                  <!-- Page Sub Header Start-->
              
                  <!-- Page Sub Header end
                  -->
                </div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">
                        <svg class="stroke-icon">
                          <use href="../../../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Edit Profile</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="edit-profile">
              <div class="row">
                  <div class="card">
                    <div class="card-header pb-0">
                      <h4 class="card-title mb-0">My Profile</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-2">
                          <div class="profile-title">
                            <div class="d-flex">                        <img class="img-70 rounded-circle" alt="" src="../../../assets/images/user/7.jpg">
                              <div class="flex-grow-1">
                                <h3 class="mb-1 f-w-600">MARK JECNO</h3>
                                <p>DESIGNER</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <h6 class="form-label">Bio</h6>
                          <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Email-Address</label>
                          <input class="form-control" placeholder="your-email@domain.com">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input class="form-control" type="password" value="password">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Website</label>
                          <input class="form-control" placeholder="http://Uplor .com">
                        </div>
                        <div class="form-footer">
                          <button class="btn btn-primary btn-block">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 
                <div class="col-xl-12">
                  <form class="card">
                    <div class="card-header pb-0">
                      <h4 class="card-title mb-0">Edit Profile</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                      
                        <div class="col-sm-6 col-md-3">
                          <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" placeholder="Username">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input class="form-control" type="email" placeholder="Email">
                          </div>
                        </div>
                    
                  
                        <div class="col-md-5">
                          <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-control btn-square">
                              <option value="0">--Select--</option>
                              <option value="1">Germany</option>
                              <option value="2">Canada</option>
                              <option value="3">Usa</option>
                              <option value="4">Aus</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div>
                            <label class="form-label">About Me</label>
                            <textarea class="form-control" rows="4" placeholder="Enter About your description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                  </form>
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
                <p class="mb-0">Copyright 2024 © <?php  echo $sitename ?> theme by pixelstrap.</p>
              </div>
              <div class="col-md-6 p-0">
                <p class="heart mb-0">Hand crafted &amp; made with
                  <svg class="footer-icon">
                    <use href="../../../assets/svg/icon-sprite.svg#heart"></use>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../../../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../../../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../../../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../../../assets/js/scrollbar/simplebar.js"></script>
    <script src="../../../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../../../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../../../assets/js/sidebar-menu.js"></script>
    <script src="../../../assets/js/sidebar-pin.js"></script>
    <script src="../../../assets/js/slick/slick.min.js"></script>
    <script src="../../../assets/js/slick/slick.js"></script>
    <script src="../../../assets/js/header-slick.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../../assets/js/script.js"></script>
    <script src="../../../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.net/<?php  echo $sitename ?>/template/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:24:56 GMT -->
</html>