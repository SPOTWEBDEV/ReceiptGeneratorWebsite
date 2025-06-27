<?php

include("../../../server/connection.php");
include("../../../server/model.php");
include("../../../server/client/auth/index.php");



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
    <link rel="icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $domain ?>assets/images/favicon.png" type="image/x-icon">
    <title><?php  echo $sitename ?> - User Dashboard</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo $domain ?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain ?>assets/css/responsive.css">
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
                  <h3> Upload Template</h3>
                </div>
                <div class="col-3 d-none d-xl-block">
                  <!-- Page Sub Header Start-->
        
                  <!-- Page Sub Header end -->
                </div>
                <div class="col-xl-5 col-sm-5 box-col-4">
                  <ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="index-2.html">
                        <svg class="stroke-icon">
                          <use href="<?php echo $domain ?>assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Template</li>
                    <li class="breadcrumb-item active">Upload Template</li>
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
                <div class="card-body">
                  <?php
                  

                  if (isset($_POST['saveTemplate'])) {
                    $project_title = mysqli_real_escape_string($connection, $_POST['project_title'] ?? '');
                    $html_contents = mysqli_real_escape_string($connection, $_POST['html_contents'] ?? '');
                    $sell = mysqli_real_escape_string($connection, $_POST['sell'] ?? '0');
                    $tags = mysqli_real_escape_string($connection, $_POST['tags'] ?? '');

                    $amount = mysqli_real_escape_string($connection, $_POST['amount']);

                    $template_id = 'TEM_' . strtoupper(uniqid());
                    

                    // Handle image upload
                    $image_name = '';
                    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                      $target_dir = "../../../uploads/template/";
                      $image_name = basename($_FILES["image"]["name"]);
                      $target_file = $target_dir . $image_name;
                      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                    }

                    // Insert into database
                    $query = "INSERT INTO template (user, sell, html_contents, tags, image, title,price, template_id)
              VALUES ('$id', '$sell', '$html_contents', '$tags', '$image_name', '$project_title','$amount','$template_id')";

                    if (mysqli_query($connection, $query)) {
                      echo Model('✅ Template saved successfully!');
                    } else {
                      echo Model('❌ Error: Couldnot insert contents to database');
                    }
                  }
                  ?>


                  <form method="POST" enctype="multipart/form-data" class="form theme-form">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Project Title</label>
                          <input class="form-control" name="project_title" type="text" placeholder="Project name *" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Sell this Template?</label>
                          <select id="sell"   class="form-select" name="sell" required>
                            <option value="1">Yes, sell it</option>
                            <option value="0">No, keep it private</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Amount</label>
                          <input class="form-control" id="amount" name="amount" type="text" value="0" required>
                        </div>
                      </div>
                    </div>

                    <script>

                      document.querySelector('#sell').onchange = (event)=>{
                          if(event.target.value == 1){
                             document.querySelector("#amount").style.display = 'block'
                          }else{
                            document.querySelector("#amount").style.display = 'none'
                            document.querySelector("#amount").value = 0
                          }
                      }

                    </script>

                    

                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Tags</label>
                          <input class="form-control" name="tags" type="text" placeholder="e.g., medical, hostel" required>
                          <small class="form-text text-muted">Use commas to separate tags</small>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>HTML Contents</label>
                          <textarea class="form-control" name="html_contents" rows="6" placeholder="Paste HTML template content here..." required></textarea>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Upload Image</label>
                          <input class="form-control" name="image" type="file" accept="image/*">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col text-end">
                        <button class="btn btn-success me-3" type="submit" name="saveTemplate">Save</button>
                        <a class="btn btn-danger" href="./index.php">Cancel</a>
                      </div>
                    </div>
                  </form>


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
    <script src="<?php echo $domain ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo $domain ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?php echo $domain ?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?php echo $domain ?>assets/js/scrollbar/simplebar.js"></script>
    <script src="<?php echo $domain ?>assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo $domain ?>assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo $domain ?>assets/js/sidebar-menu.js"></script>
    <script src="<?php echo $domain ?>assets/js/sidebar-pin.js"></script>
    <script src="<?php echo $domain ?>assets/js/slick/slick.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/slick/slick.js"></script>
    <script src="<?php echo $domain ?>assets/js/header-slick.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/morris-chart/raphael.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/morris-chart/morris.js"> </script>
    <script src="<?php echo $domain ?>assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?php echo $domain ?>assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/dashboard/default.js"></script>
    <script src="<?php echo $domain ?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?php echo $domain ?>assets/js/datatable/datatables/datatable.custom1.js"></script>
    <script src="<?php echo $domain ?>assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo $domain ?>assets/js/owlcarousel/owl-custom.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead/handlebars.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead/typeahead.custom.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead-search/handlebars.js"></script>
    <script src="<?php echo $domain ?>assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="<?php echo $domain ?>assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo $domain ?>assets/js/script.js"></script>
    <script src="<?php echo $domain ?>assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
</html>