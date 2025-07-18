<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<div class="sidebar-wrapper" data-layout="stroke-svg">
  <div>
    <div class="logo-icon-wrapper">
      <a href="index-2.html"><img
          class="img-fluid"
          src="<?php echo $domain ?>assets/images/logo/logo-icon.png"
          alt="" /></a>
    </div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow">
        <i data-feather="arrow-left"></i>
      </div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn">
            <a href="index-2.html"><img
                class="img-fluid"
                src="<?php echo $domain ?>assets/images/logo/logo-icon.png"
                alt="" /></a>
            <div class="mobile-back text-end">
              <span>Back</span><i class="fas fa-angle-right ps-2" aria-hidden="true"></i>
            </div>
          </li>
          <li class="pin-title sidebar-main-title">
            <div>
              <h6>Pinned</h6>
            </div>
          </li>

          <li class="sidebar-list">
            <i class="bi bi-pin-angle"></i>
            <a class="sidebar-link " href="<?php echo $domain ?>user/dashboard/">
              <i class="bi bi-speedometer2"></i>
              <span class="lan-7">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-list">
          
            <a class="sidebar-link " href="<?php echo $domain ?>user/pricing/">
              <i class="bi bi-cash-stack"></i>
              <span class="lan-3">Pricing</span>
            </a>
          </li>


          <li class="sidebar-list">
            <a class="sidebar-link " href="<?php echo $domain ?>user/editor/">
              <i class="bi bi-folder2-open"></i>
              <span class="lan-7">Generate Invoice</span>
            </a>
          </li>

          <li class="sidebar-list">
          
            <a class="sidebar-link sidebar-title" href="#">
              <i class="bi bi-folder2-open"></i>
              <span class="lan-7">My Template</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo $domain ?>user/template/upload-template">Uploads Template</a></li>
              <li><a href="<?php echo $domain ?>user/template/list-template">List Template</a></li>
            </ul>
          </li>

          <li class="sidebar-list">
            
            <a class="sidebar-link sidebar-title" href="#">
              <i class="bi bi-gear"></i>
              <span class="lan-7">Setting</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo $domain ?>user/setting/profile/">Account Setting</a></li>
              <li><a href="<?php echo $domain ?>user/setting/template-setting/">Template Setting</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </div>
</div>