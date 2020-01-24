<?php session_start();?>
<?php $admin_page = "Edit Pages"; ?>
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
        <div class="col-sm-4 col-12">
          <h3>Edit Page Contents</h3>
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
      <div class="col-sm-12">
        <h4>Select a Page to Edit:</h4>
      </div>
    </div><!--card row-->
   </div><!--colsm8major-->
    
</div><!--rowmajor-->
</div>


<?php require_once("includes/admin-footer.php"); ?>