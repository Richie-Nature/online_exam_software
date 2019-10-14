<?php require_once("includes/admin-header.php");?>
<div class="container-fluid">
<div class="row">
<!--  -->
    <div class="col-5 col-sm-4 col-md-2 ">
        <div class = "flexbox-container">
            <div class = "div-height">
                <p class = "brand-txt">Online Exam Software</p>    
            </div>
            
            <div class = "div-nav">
                <hr>
                <ul class="menu-nav navbar-nav">
                   <li class="nav-item"> <a href="admin-panel.php" class="nav-link"><i class="fas fa-home cust-fa"></i>Dashboard</a> </li>
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
            </div> <!--end div-nav-->
            
        </div><!--end div-flexbox-->
    </div><!--end div-col-->
   
    <div class=" col-7 col-md-10 col-sm-8 custom-nav ">
    <nav class="navbar  navbar-expand-md navbar-light bg-light">
            <button class="collapsible btn btn-small" type="button" id="menubtn" >
            <i class="fas fa-bars text-danger"></i><i class="fas fa-ellipsis-v text-danger"></i>
            </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">

          <ul class="navbar-nav ul-right">
                <li class="nav-item dropdown ml-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-envelope cust-fa"></i> 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Sign In</a>
                <a class="dropdown-item" href="#">Sign Up</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sign Out</a>
              </div>
            </li>

            <li class="nav-item dropdown ml-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-clipboard-list cust-fa"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Sign In</a>
                <a class="dropdown-item" href="#">Sign Up</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sign Out</a>
              </div>
            </li>

            <li class="nav-item dropdown ml-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell cust-fa"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Sign In</a>
                <a class="dropdown-item" href="#">Sign Up</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sign Out</a>
              </div>
            </li>

            <div class="row">
                <div class="col-md-12">
                    <li class="nav-item dropdown ml-3"> 
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle cust-fa"> <span>Admin Richie</span> </i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="#">Edit profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sign Out</a>
              </div>
             </li>
                </div>
            </div>
            
          </ul>
          
        </div>
      </nav> 
    </div>
</div>
</div>
<div class="container">                  
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item disabled"><a href="#">Login</a></li>
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active">Data</li>
  </ul>
</div>

<?php require_once("includes/admin-footer.php"); ?>