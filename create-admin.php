<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<div class="container-fluid">
<?php  require_once("includes/admin-sidebar.php"); ?>
   <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-6 content-area">
      <div class="row">
        <div class="col-sm-6 col-12">
          <h3>Manage Users > Admins</h3>
        </div>                  
        
    </div><!--row-->
    <div class="row">
      <div class="col-sm-8">
        <ul class="breadcrumb breadul">
          <li class="breadcrumb-item "><a href="#" class = "bread">Home</a></li>
          <li class="breadcrumb-item  "><a href="#" class = "bread">lorem</a></li>
          <li class="breadcrumb-item bread active">lorem</li>
      </ul>
      </div>
    </div><!--row-->
    <div class="row">
        <div class="col-sm-2">
            <div class="container">
                <div class="card" style="max-width:100px; max-height: 50px;">
                   <a href=""><img class="card-img-top" src="img/profileicon1.png" alt="Card image"></a> 
                    <div class="card-img-overlay">
                    </div>
            </div>
        </div>
    </div>
      <div class="col-sm-7 ">
        <h4 class="">Add New Admin</h4>
      </div>
      <div class="col-sm-3">
          <a href="users_table.php" class = "btn btn-info" >View users</a>
      </div>
    </div><!-- row-->
    <div class="container">
    <div class="row">
        <div class="col-sm-8  offset-2">
            <div class=" form-border">
            <form action="" method="Post">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="fname" name="fname"  placeholder="Enter Firstname">
                            <small id="fnameHelp" class="form-text text-danger" ></small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="lname" name="lname"  placeholder="Enter Lastname">
                            <small id="lnameHelp" class="form-text text-danger" ></small>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="useremail" name="useremail" aria-describedby="emailHelp" placeholder="someone@myexample.com">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                        
                </div>
                <div class="col-12 col-lg-6">
                        <div class="form-group">
                            
                            <input type="text" class="form-control inputs inputs border-top-0 border-right-0 border-left-0 border-success" id="username" name="username" placeholder="Username" 
                            onfocus="document.getElementById('emailHelp').style.display = 'none'">
                            
                            <small id="usernamehelp" class="form-text text-danger" ></small>
                        </div>
                </div>
        </div>
            
             <div class="row">
                 <div class="col-12 col-lg-6">
                        <div class="form-group">
                        <div class="input-group">
                                <input type="password" class="form-control inputs inputs border-top-0 border-right-0 border-left-0 border-success" id="password" name="password" placeholder="Password"
                                onfocus="document.getElementById('usernamehelp').style.display = 'none'" 
                                oninput="document.getElementById('repeatpassword').style.display = 'block'">
                                <div class="input-group-append  ">
                                <i class="fa fa-eye input-group-text eye border-0" onmouseover="displayPassword()" onmouseout="dontShow()"></i>
                                </div>
                        </div>
                        
                        <small class="form-text text-dark">Password must be at least 8-characters</small>
                        <small id="passwordhelp" class="form-text text-danger" ></small>
                    </div>
                </div>
                 
                 <div class="col-12 col-lg-6">
                        <div class="form-group" style="display:none" id="repeatpassword">
                                
                                <div class="input-group">
                                        <input type="password" class="form-control inputs inputs border-top-0 border-right-0 border-left-0 border-success" id="confirmpassword" name="confirmpassword" 
                                        onfocus="document.getElementById('passwordhelp').style.display = 'none'" placeholder = "Confirm Password">
                                        <div class="input-group-append">
                                        <i class="fa fa-eye input-group-text eye border-0" onmouseover="displayPassword()" onmouseout="dontShow()"></i>
                                        </div>
                                </div>
                                
                                <small id="confirmhelp" class="form-text text-danger" ></small>
                            </div>
                </div>
             </div>  
             
             <div class="row">
                 <div class="col-12 col-lg-6">
                 <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="nationality" name="nationality"  placeholder="Nationality">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                 </div>
                 <div class="col-12 col-lg-6">
                 <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="address" name="address"  placeholder="Address">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-6 ">
                 <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input" id="male" name="gender" value ="male" checked>
                        <label class="custom-control-label" for="male">Male</label>
                      </div>
                </div>
                 <div class="col-6">
                 <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input" id="female" name="gender" value ="female">
                        <label class="custom-control-label" for="female">Female</label>
                      </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-12 col-lg-6">
                 <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="phone" name="phone"  placeholder="Mobile Number">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                 </div>
                 <div class="col-12 col-lg-6">
                 <div class="form-group">
                            <input type="number" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="phone" name="phone" max = "3" min ="0" placeholder="Set Access Level">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                 </div>
                 </div>
            </div>
            
                 
                 <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="loggedIn" name="loggedIn" checked>
                        <label class="custom-control-label" for="loggedIn">Remember Password</label>
                      </div>
                      <div class="row mt-4">
                          <div class="col-4 col-sm-5 col-md-4">
                              <button type="submit" class="btn btn-success" name = "submit" >Add Admin</button>
                          </div>
                          <div class="col-4 col-sm-6 col-md-4">
                              <a href="edit_admins.php" class = "text-danger">Cancel</a>
                          </div>
                      </div>
                 
            </form>
        </div>
        </div>
        </div>
    </div>
   </div><!--colsm8major-->
    
</div><!--rowmajor-->
</div>


<?php require_once("includes/admin-footer.php"); ?>