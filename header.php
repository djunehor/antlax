<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $page_name.' | '.$option['website_name']; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="<?php echo $option['website_desc']; ?>" />
<meta property="og:type"            content="website" /> 
<meta property="og:url"             content="<?php echo "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" /> 
<meta property="og:title"           content="<?php echo $page_name; ?>" /> 
<meta property="og:description"    content="<?php echo $option['website_desc']; ?>" />
<meta property="og:image" content="../dist/img/avatar3.png" /><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo substr($option['website_name'],0,1); ?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $option['website_name']; ?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_SESSION['adminImg']; ?>" class="user-image" alt="Admin Image">
              <span class="hidden-xs"><?php echo $_SESSION['adminName']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $_SESSION['adminImg']; ?>" class="img-circle" alt="Admin Image">

                <p>
                  <?php echo $_SESSION['adminName']; ?>
                  <small><?php echo date('d m Y, g:i a',time()); ?> </small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a><?php echo $_SESSION['adminEmail']; ?></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="admin-profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="admin-login" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION['adminImg']; ?>" class="img-circle" alt="Admin Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['adminName']; ?></p>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="all-users"><i class="fa fa-users"></i> User Management</a></li>
        <li><a href="all-notifications"><i class="fa fa-clock-o"></i> View Notifications</a></li>
        <li><a href="admin-settings"><i class="fa fa-retweet"></i> Website Setings</a></li>
        <li><a href="admin-profile"><i class="fa fa-key"></i> Update Admin Settings</a></li>
      <!--  <li><a href="new-manager"><i class="fa fa-user"></i> New Manager</a></li> -->
        <li><a href="all-managers"><i class="fa fa-user"></i> All Managers</a></li>
        <li class="header"></li>
        <li><a href="admin-login"><i class="fa fa-circle-o text-red"></i> <span>Log Out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
