<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<div class="sidebar-wrapper" data-layout="stroke-svg">
  <div>
    <div class="logo-wrapper">
      <a href="index-2.html">
        <img
          class="img-fluid for-light"
          src="<?php echo $domain ?>assets/images/logo/logo.png"
          alt="" /><img
          class="img-fluid for-dark"
          src="<?php echo $domain ?>assets/images/logo/logo_dark.png"
          alt="" /></a>
      <div class="toggle-sidebar">
        <svg class="sidebar-toggle">
          <use href="<?php echo $domain ?>assets/svg/icon-sprite.svg#toggle-icon"></use>
        </svg>
      </div>
    </div>
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
            <a class="sidebar-link sidebar-title" href="<?php echo $domain?>admin/user/">
              <i class="bi bi-speedometer2"></i>
              <span class="lan-7">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-list">
            <i class="bi bi-pin-angle-fill"></i>
            <a class="sidebar-link sidebar-title" href="#">
              <i class="bi bi-cash-stack"></i>
              <span class="lan-3">Deposite</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a class="lan-4" href="<?php echo $domain ?>admin/deposit/deposit-history/">Pending Deposit</a></li>
              <li><a class="lan-5" href="<?php echo $domain ?>admin/deposit/deposit-history/">Approved Deposit</a></li>
              <li><a class="lan-5" href="<?php echo $domain ?>admin/deposit/deposit-history/">Declined Deposit</a></li>
            </ul>
          </li>

          
          <li class="sidebar-list">
            <i class="bi bi-pin-angle-fill"></i>
            <a class="sidebar-link sidebar-title" href="#">
              <i class="bi bi-folder2-open"></i>
              <span class="lan-7">Payment</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo $domain ?>user/project/create-project">Payment Method</a></li>
              
            </ul>
          </li>

          <li class="sidebar-list">
            <i class="bi bi-pin-angle-fill"></i>
            <a class="sidebar-link sidebar-title" href="#">
              <i class="bi bi-folder2-open"></i>
              <span class="lan-7">Template</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo $domain ?>user/project/create-project">Create Template</a></li>
              <li><a href="<?php echo $domain ?>user/project/list-project">List Template</a></li>
            </ul>
          </li>

          <li class="sidebar-list">
            <i class="bi bi-pin-angle-fill"></i>
            <a class="sidebar-link sidebar-title" href="#">
              <i class="bi bi-gear"></i>
              <span class="lan-7">Setting</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="<?php echo $domain ?>user/setting/profile/">Profile Setting</a></li>
              <li><a href="<?php echo $domain ?>user/setting/template-setting/">Account Setting</a></li>
              <li><a href="<?php echo $domain ?>user/setting/template-setting/">Template Setting</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </div>
</div>