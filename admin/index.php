<?php
$page_name="Admin Dashboard";
require "admin-auth.php";
require "../header.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small><?php echo $page_name; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> <?php echo $page_name; ?></a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE activated=1 AND joindate between '".strtotime('today')."' and '".(strtotime('tomorrow')-1)."'")); ?></h4>

              <p>Users today</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE activated=1 AND joindate between '".strtotime('this week')."' and '".(strtotime('next week')-1)."'")); ?></h4>

              <p>Users this week</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE activated=1 AND joindate between '".strtotime('this month')."' and '".(strtotime('next month')-1)."'")); ?></h4>

              <p>Users this month</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE activated=1 AND joindate between '".strtotime('this year')."' and '".(strtotime('next year')-1)."'")).'/'.mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table")); ?></h4>

              <p>Users this year/User all time</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
  <!--  <div class="alert alert-info alert-dismissible">           
Dismissible notifcation here</div> -->
      <!-- /.row -->
		<a class="btn btn-app" href="update-guide">
                <i class="fa fa-edit"></i> Update User Guide
              </a>
              <a class="btn btn-app" href="all-users">
                <i class="fa fa-users"></i> User Management
              </a>
              <a class="btn btn-app" href="send-notification">
                <i class="fa fa-bullhorn"></i> Send Notification
              </a>
              <a class="btn btn-app" href="admin-settings">
                <i class="fa fa-retweet"></i> Referral Settings
              </a>
              <a class="btn btn-app" href="admin-profile">
                <i class="fa fa-key"></i> Update Password
              </a>
              <a class="btn btn-app" href="ladmin-login">
                <i class="fa fa-circle-o text-red"></i> Log Out
              </a>
            </section>		
  <!-- /.content-wrapper -->
 <?php require '../foot.php'; ?>