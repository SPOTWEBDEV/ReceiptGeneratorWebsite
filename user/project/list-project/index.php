<?php

include("../../../server/connection.php")



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php  echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, <?php  echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <title><?php  echo $sitename ?> - User Dashboard</title>
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
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../../../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
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
    <!-- page-wrapper Start   -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->

        <?php  include("../../include/nav.php") ?>
    
      <!-- Page Header Ends                              -->
      <!-- Page body Start -->
      <div class="page-body-wrapper"> 
        <!-- Page Sidebar Start-->
        <?php  include("../../include/sidenav.php") ?>


        



        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title"> 
              <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                  <h3>Project List </h3>
                </div>
                <div class="col-5 d-none d-xl-block">
                  <!-- Page Sub Header Start-->
        
                  <!-- Page Sub Header end -->
                </div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                  <ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="index-2.html">
                        <svg class="stroke-icon">
                          <use href="../../../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">All project</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard"> 
            <div class="row">
              <div class="col-xl-12 proorder-md-9 box-col-6">
                <div class="card">
                  <div class="card-header"> 
                    <div class="header-top"> 
                      <h4>Project Summary </h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown22" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="../../../assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown22"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive custom-scrollbar"> 
                      <table class="project-summary table" id="project-summary">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Team</th>
                            <th>Project Cost</th>
                            <th>Project Status</th>
                            <th>Payment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="f-w-600">A908</td>
                            <td> <a href="projects.html">Amazon Website</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/8.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/10.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                  <li class="d-inline-block">
                                    <p>26+</p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td>$23,490</td>
                            <td>Completed</td>
                            <td class="txt-success">Done </td>
                          </tr>
                          <tr>
                            <td>R840</td>
                            <td> <a href="projects.html">Paytm bank app</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/20.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/12.jpg" alt=""></li>
                                  <li class="d-inline-block">
                                    <p>6+</p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td>$45,459</td>
                            <td>In Progress</td>
                            <td class="txt-danger">Pending</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">V908</td>
                            <td class="f-w-600"> <a href="projects.html">Cytrust Dashboard</a></td>
                            <td class="team-avtar"> 
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/14.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/13.jpg" alt=""></li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">$78,748 </td>
                            <td class="f-w-600">Completed</td>
                            <td class="txt-success f-w-600">Done</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">K450</td>
                            <td> <a href="projects.html">Project Mecha</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul> 
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/22.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/15.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">	$98,878</td>
                            <td class="f-w-600">In Progress</td>
                            <td class="txt-danger f-w-600">Pending</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">D480</td>
                            <td class="f-w-600"><a href="projects.html">Dynamic Program</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/21.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/23.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../../../assets/images/dashboard/avtar/24.jpg" alt=""></li>
                                  <li class="d-inline-block"> 
                                    <p>5+                           </p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">$23,490</td>
                            <td class="f-w-600">In Progress</td>
                            <td class="txt-danger f-w-600">Pending</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
       <?php  include ("../../include/footer.php") ?>



       
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
    <script src="../../../assets/js/chart/morris-chart/raphael.js"></script>
    <script src="../../../assets/js/chart/morris-chart/morris.js"> </script>
    <script src="../../../assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="../../../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../../../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../../../assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="../../../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../../../assets/js/dashboard/default.js"></script>
    <script src="../../../assets/js/notify/index.js"></script>
    <script src="../../../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../../../assets/js/datatable/datatables/datatable.custom1.js"></script>
    <script src="../../../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../../../assets/js/owlcarousel/owl-custom.js"></script>
    <script src="../../../assets/js/typeahead/handlebars.js"></script>
    <script src="../../../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../../../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../../../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../../../assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="../../../assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../../assets/js/script.js"></script>
    <script src="../../../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>