<?php

include("../../server/connection.php");


if (isset($_GET['action']) && isset($_GET['id'])) {
  $userId = intval($_GET['id']);
  $action = $_GET['action'];

  if ($action === 'suspend') {
    $update = mysqli_query($connection, "UPDATE users SET status = 'suspended' WHERE id = $userId");
    if ($update) {
      echo "<script>Model({ message: 'User suspended successfully.' });</script>";
    } else {
      echo "<script>Model({ message: 'Failed to suspend user.' });</script>";
    }
  }

  if ($action === 'delete') {
    $delete = mysqli_query($connection, "DELETE FROM users WHERE id = $userId");
    if ($delete) {
      echo "<script>Model({ message: 'User deleted successfully.' });</script>";
    } else {
      echo "<script>Model({ message: 'Failed to delete user.' });</script>";
    }
  }

  // Optional: refresh to prevent repeat actions on reload
  echo "<script>setTimeout(() => { window.location.href = window.location.pathname; }, 1000);</script>";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $sitename ?> admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, <?php echo $sitename ?> admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
  <title><?php echo $sitename ?> - View All Users Deposits</title>
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

  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper default-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('../include/navbar.php')  ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper default-menu default-menu">
      <!-- Page Sidebar Start-->
      <?php include('../include/sidenav.php') ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-xl-4 col-sm-7 box-col-3">
                <h3> Project Create</h3>
              </div>
              <div class="col-5 d-none d-xl-block">
                <!-- Page Sub Header Start-->
                <div class="left-header main-sub-header p-0">
                  <div class="left-menu-header">
                    <ul class="header-left">

                      <li class="onhover-dropdown p-0"><span class="f-w-700">Miscellaneous</span>
                        <ul class="onhover-show-div left-dropdown">
                          <li class="flyout-right"><a href="#">Gallery</a>
                            <ul>
                              <li><a href="gallery.html">Gallery Grid</a></li>
                              <li><a href="gallery-with-description.html">gallery-with-description</a></li>
                              <li><a href="gallery-masonry.html">gallery-masonry</a></li>
                              <li><a href="masonry-gallery-with-disc.html">masonry-gallery-with-disc</a></li>
                              <li><a href="gallery-hover.html">gallery-hover</a></li>
                            </ul><i class="fa fa-angle-right"></i>
                          </li>
                          <li class="flyout-right"><a href="#">Blog</a>
                            <ul>
                              <li><a href="blog.html">blog</a></li>
                              <li><a href="blog-single.html">blog-single</a></li>
                              <li><a href="add-post.html">add-post</a></li>
                            </ul><i class="fa fa-angle-right"></i>
                          </li>
                          <li><a href="FAQ-2.html">FAQ</a></li>
                          <li class="flyout-right"><a href="#">Job Search</a>
                            <ul>
                              <li><a href="job-cards-view.html">job-cards-view</a></li>
                              <li><a href="job-list-view.html">job-list-view</a></li>
                              <li><a href="job-details.html">job-details</a></li>
                              <li><a href="job-apply.html">job-apply</a></li>
                            </ul><i class="fa fa-angle-right"></i>
                          </li>
                          <li class="flyout-right"><a href="#">Job Search</a>
                            <ul>
                              <li><a href="job-cards-view.html">learning-list</a></li>
                              <li><a href="learning-detailed.html">learning-detailed</a></li>
                            </ul><i class="fa fa-angle-right"></i>
                          </li>
                          <li class="flyout-right"><a href="#">Maps</a>
                            <ul>
                              <li><a href="map-js.html">Map-js</a></li>
                              <li><a href="vector-map.html">Vector Maps</a></li>
                            </ul><i class="fa fa-angle-right"></i>
                          </li>
                          <li class="flyout-right"><a href="#">Editors </a>
                            <ul>
                              <li><a href="summernote.html">Summer Note</a></li>
                              <li><a href="CK%20editor.html">CK editor</a></li>
                              <li><a href="simple-MDE.html">MDE editor</a></li>
                              <li><a href="ace-code-editor.html">ACE code editor </a></li>
                            </ul><i class="fa fa-angle-right"> </i>
                          </li>
                          <li><a href="knowledgebase.html">Knowledgebase </a></li>
                          <li> <a href="support-ticket-2.html">Support Ticket</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Page Sub Header end
                  -->
              </div>
              <div class="col-xl-3 col-sm-5 box-col-4">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg></a></li>
                  <li class="breadcrumb-item">Apps</li>
                  <li class="breadcrumb-item active">Project Create </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <div class="header-top">
                    <h4>Deposit History Table </h4>
                    <div class="dropdown icon-dropdown setting-menu ">
                      <button class="btn dropdown-toggle" id="userdropdown22" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg>
                          <use href="<?php echo $domain ?>assets/svg/icon-sprite.svg#setting"> </use>
                        </svg>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown22"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive custom-scrollbar">
                    

                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                         <th>#</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Account Status</th>
                          <th>Action</th></tr>
                        </tr>
                      </thead>
                      <tbody>

                      <?php

                      $select = mysqli_query($connection, "SELECT * FROM `users`");
                        if (mysqli_num_rows($select) > 0) {
                          $count = 0;
                          while ($row = mysqli_fetch_array($select)) {
                            $count++;
                            $userId = $row['id'];
                            $status = $row['status'];
                        ?>
                       
                           
                        <tr>
                          <td class="f-w-600"><?= $count ?></td>
                          <td><?= htmlspecialchars($row['username']) ?></td>
                          <td><?= htmlspecialchars($row['email']) ?></td>
                          <td class="<?= $status === 'active' ? 'text-success' : ($status === 'inactive' ? 'text-warning' : 'text-danger') ?>">
                            <?= ucfirst($status) ?>
                          </td>
                          <td class="text-end"><a class="icon" href="javascript:void(0)"></a><a class="btn btn-primary btn-sm" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-transparent btn-sm" href="javascript:void(0)"><i class="fa fa-link"></i> Update</a><a class="icon" href="javascript:void(0)"></a><a class="btn btn-danger btn-sm" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete</a></td>
                        </tr>

                        <?php  }}  ?>
                        
                        
                        
                        
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
      <?php include('../include/footer.php') ?>
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



</html>