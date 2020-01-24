
<div class="row">
    <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 ">
            <div class = "side-bar">
                <hr>
                <div class="container">

                   <div class="form-group text-center">
                    <div class="" id="profile-sidebar">
                    <form action="" method="post" enctype = "multipart/form-data">
                        <img src="images/<?php if(isset($_SESSION['profile'])){echo $_SESSION['profile'];}else{echo "profileicon1.png";}?>" alt="" id = "adminProfile" class = "img-fluid rounded-circle side-pic" onclick = "triggerClick('side-profile')">
                        <input type="file" name="side-profile" onchange="displayImage(this,'adminProfile');" id="side-profile" style = "display:none;" oninput="triggerClick('uploadBtn')">
                        <button type="submit" class="btn" id="uploadBtn" name="uploadBtn" style="display:none;"></button>
                     </form>
                </div>
                    
                        
                    </div>  

                  
                </div>
                <hr>
                <ul class="menu-nav navbar-nav">
                   <li class="nav-item active"> <a href="dashboard.php" class="nav-link <?php if($admin_page=='Dashboard')echo 'here-now text-light';?>"><i class="fas fa-home cust-fa"></i>Dashboard</a> </li>
                   <li class="nav-item dropdown"> 
                       <div class="dropdown dropright side-drop">
                           <a class="nav-link dropdown-toggle <?php if($admin_page=='User Info')echo 'here-now text-light';?>" href="#"  role="button" data-toggle="dropdown">
                        <i class="fas fa-user cust-fa"></i> Manage Users 
                        </a>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item <?php if($admin_page=='User Info')echo 'here-now text-light';?>" href="edit_users.php">All Users</a>
                            <!-- <a class="dropdown-item" href="edit_admins.php">Admins</a> -->
                        </div>
                       </div>
                        
                   </li>
                   <li class="nav-item"><a href="edit_pages.php" class="nav-link <?php if($admin_page=='Edit Pages')echo 'here-now text-light';?>"><i class="fas fa-edit cust-fa"></i>Manage Page Contents</a></li>
                   <li class="nav-item"><a href="edit_subjects.php" class="nav-link <?php if($admin_page=='Edit Subjects')echo 'here-now text-light';?>"><i class="fas fa-question cust-fa"></i>Manage Subjects & Questions</a></li>
                   <li class="nav-item"><a href="monitor.php" class="nav-link <?php if($admin_page=='Monitor Exams')echo 'here-now text-light';?>"><i class="fas fa-eye cust-fa"></i>Monitor Exam</a></li>
                   <li class="nav-item"><a href="certificate.php" class="nav-link <?php if($admin_page=='Certifications & Results')echo 'here-now text-light';?>"><i class="fas fa-certificate cust-fa"></i>Certifications & Results</a></li>
                </ul>
                <hr>
            </div> <!--end side-bar-->
    </div><!--end div-col-->

<script src="js/admin.js"></script>

