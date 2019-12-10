<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="<?php echo base_url();?>site/dashboard" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo base_url(); ?>assets/img/logo-small.png">
          </div>
        </a>
        <a href="<?php echo base_url();?>site/dashboard" class="simple-text logo-normal">
         <?php echo $this->session->userdata('username'); ?>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <!-- <li class="active "> -->
         
          <li>
            <a href="<?php echo base_url();?>site/dashboard">
            <i class="fa fa-home" aria-hidden="true"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
          <a href="<?php echo base_url();?>attendance">
          <i class="fa fa-times-circle-o" aria-hidden="true"></i>
              <p>Attendance</p>
            </a>
          </li>
          
          <li>
          <a href="<?php echo base_url();?>site/account_management">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
              <p>Manage Account</p>
            </a>
          </li>
          <!-- <li>
            <a href="./notifications.html">
            <i class="fa fa-bell" aria-hidden="true"></i>
              <p>Notifications</p>
            </a>
          </li> -->
          <!-- <li>
            <a href="./user.html">
            <i class="fa fa-user" aria-hidden="true"></i>
              <p>User Profile</p>
            </a>
          </li> -->
          <!-- <li>
            <a href="./tables.html">
            <i class="fa fa-table" aria-hidden="true"></i>
              <p>Activity List</p>
            </a>
          </li> -->
          <!-- <li>
            <a href="./typography.html">
            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
              <p>Training Schedule</p>
            </a>
          </li> -->
          <!-- <li class="active-pro">
            <a href="./upgrade.html">
            <i class="fa fa-rocket" aria-hidden="true"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"><?php echo $nav_title; ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                <i class="fa fa-columns" aria-hidden="true"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li> -->
              <!-- <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell" aria-hidden="true"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> -->
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="<?php echo base_url();?>index.php/site/logout" placeholder="Hey">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Logout</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->