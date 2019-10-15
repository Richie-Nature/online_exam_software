<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<div class="container-fluid">
<div class="row">
    <div class="col-5 col-sm-4 col-md-2 " style = "margin-top: -6px;">
            <div class = "side-bar">
                <hr>
                <ul class="menu-nav navbar-nav">
                   <li class="nav-item active"> <a href="admin-panel.php" class="nav-link"><i class="fas fa-home cust-fa"></i>Dashboard</a> </li>
                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user cust-fa"></i> Manage Users 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Students</a>
                            <a class="dropdown-item" href="#">Admins</a>
                        </div>
                   </li>
                   <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-edit cust-fa"></i>Manage Page Contents</a></li>
                   <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-question cust-fa"></i>Manage Subjects & Questions</a></li>
                   <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-eye cust-fa"></i>Monitor Exam</a></li>
                   <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-certificate cust-fa"></i>Certifications & Results</a></li>
                </ul>
                <hr>
            </div> <!--end side-bar-->
    </div><!--end div-col-->
   <div class="col-sm-8">
      <div class="row">
        <div class="col-sm-4">
          <h1>Dashboard</h1>
        </div>                  
        
    </div><!--row-->
    <div class="row">
      <div class="col-sm-8">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item disabled"><a href="#">Login</a></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Data</li>
      </ul>
      </div>
    </div>
   </div><!--colsm8-->
    
</div>
</div>


<?php require_once("includes/admin-footer.php"); ?>