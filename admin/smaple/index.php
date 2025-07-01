<?php

include("../../server/connection.php")



?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.net/<?php echo $sitename ?>/template/projectcreate.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:25:32 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, <?php echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <title><?php echo $sitename ?> - Premium Admin Template</title>
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
  <?php include("../include/navbar.php") ?>
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
              <p class="mb-0">Copyright 2025 © <?php echo $sitename ?> theme by pixelstrap.</p>
            </div>
            <div class="col-md-6 p-0">
              <p class="heart mb-0">Hand crafted &amp; made with
                <svg class="footer-icon">
                  <use href="https://admin.pixelstrap.net/<?php echo $sitename ?>/assets/svg/icon-sprite.svg#heart"></use>
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

<!-- Mirrored from admin.pixelstrap.net/<?php echo $sitename ?>/template/projectcreate.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jun 2025 12:25:33 GMT -->

</html>