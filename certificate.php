<?php session_start(); ?>
<?php $admin_page = "Certifications & Results"; ?>
<?php require("includes/functions.php");?>
<?php require_once("includes/connection.php"); ?>
<?php confirm_logged_in();?>
<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<div class="container-fluid">
<?php  require_once("includes/admin-sidebar.php"); ?>
<?php require_once("includes/admin-sidepic.php");?>
   <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-6 content-area">
      <div class="row">
        <div class="col-sm-5 col-12 col-md-4">
          <h3>Certifications & Results</h3>
        </div>                  
        <div class="col-sm-6 col-12 offset-md-2 ">
          <p id="clock" class="text-danger lead"></p>
        </div>                  
        
    </div><!--row-->
    <div class="row">
      <div class="col-sm-8">
        <ul class="breadcrumb breadul">
          <li class="breadcrumb-item "><a href="#" class = "bread">Home</a></li>
          <li class="breadcrumb-item  "><a href="#" class = "bread">Login</a></li>
          <li class="breadcrumb-item "><a href="#" class = "bread">Dashboard</a></li>
          <li class="breadcrumb-item bread active">Data</li>
      </ul>
      </div>
    </div><!--row-->
    
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2">
      <div class="card bg-danger">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Java SE Certificate</h5>
            <hr class="my-4">
            <div class="row">
              <div class="col-12">
                <a href="view-certified.php" class="btn btn-sm btn-primary card-text mb-2">View certified</a><span class="badge badge-warning">25</span>
              </div>
                <div class="col-12">
                  <a href="exam-report.php" class="btn btn-sm btn-success card-text">Certify Students</a><span class="badge badge-warning">8</span>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2">
      <div class="card bg-danger">
          <div class="card-body text-center">
            <h5 class="card-title text-light">OOP Advanced Certificate</h5>
            <hr class="my-4">
            <div class="row">
              <div class="col-12">
                <a href="view-certified.php" class="btn btn-sm btn-primary card-text mb-2">View certified</a><span class="badge badge-warning">30</span>
              </div>
                <div class="col-12">
                  <a href="exam-report.php" class="btn btn-sm btn-success card-text">Certify Students</a><span class="badge badge-warning">5</span>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2">
      <div class="card bg-danger">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Comptia A+ Certificate</h5>
            <hr class="my-4">
            <div class="row">
              <div class="col-12">
                <a href="view-certified.php" class="btn btn-sm btn-primary card-text mb-2">View certified</a><span class="badge badge-warning">15</span>
              </div>
                <div class="col-12">
                  <a href="exam-report.php" class="btn btn-sm btn-success card-text">Certify Students</a><span class="badge badge-warning">1</span>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2">
      <div class="card bg-danger">
          <div class="card-body text-center">
            <h5 class="card-title text-light">React Certificate</h5>
            <hr class="my-4">
            <div class="row">
              <div class="col-12">
                <a href="view-certified.php" class="btn btn-sm btn-primary card-text mb-2">View certified</a><span class="badge badge-warning">25</span>
              </div>
                <div class="col-12">
                  <a href="exam-report.php" class="btn btn-sm btn-success card-text">Certify Students</a><span class="badge badge-warning">3</span>
                </div>
            </div>
          </div>
        </div>
      </div>

    </div><!--row-->

    <div class="row mb-3">
      <div class="col-12 ">
        <h5 class="text-success text-center">Certificates Available: <span class="text-dark"><strong>4</strong></span></h5>
      </div>
      <!-- <div class="col-12 col-sm-2"> -->
      <div class="dropdown dropright exam-drop">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Select Exam
        </button>
        <div class="dropdown-menu ">
          <a class="dropdown-item" href="exam-report.php">Java SE</a>
          <a class="dropdown-item" href="exam-report.php">OOP Concepts</a>
          <a class="dropdown-item" href="exam-report.php">Comptia A+</a>
          <a href="exam-report.php" class="dropdown-item">React Junior Test</a>
        </div>
    <!-- </div> -->
      </div>
    </div><!--card row-->

    
   </div><!--colsm8major-->
    
</div><!--rowmajor-->
</div>


<?php require_once("includes/admin-footer.php"); ?>