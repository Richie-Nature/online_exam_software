<?php 
    if(isset($_POST['edit'])) { 
        $id = $_POST['uid'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $nation = $_POST['nation'];
        $contact = $_POST['address'];
        $phoneNo = $_POST['phone'];
        $gend = $_POST['gender'];
        $access = $_POST['access'];
        $profile = $_POST['picture'];
        // echo "<pre>".print_r($_POST)."</pre>";
        // die();
    
    }
     
    ?>
        <!-- The Modal -->
<div class="modal fade" id="createAdminModal" >

            <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="submit" class="close" data-dismiss="modal" onclick="javascript: if(!confirmCancel()){this.preventDefault();}">&times;</button>
                    </div>

                    <div class="modal-body modal-table">
                        <div class="container">
                        <form action="" method="POST" enctype = "multipart/form-data">
                    <div class="row mb-4">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xl-3">
                <div class="form-group text-center">
                    <div class="" id="profile-container">
                    
                    <img src="images/profileicon1.png" alt="" id = "newPicDis" class = "img-fluid">
                </div>
                    <!-- <label for="newPhoto"><strong>Upload Photo</strong></label>
                        <input type="file" name="newPhoto" onchange="displayImage(this,'newPicDis');" id="newPhoto" style = "display:none;"> -->
                    </div>                    
                </div>
           
            </div><!-- row-->
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="hidden" name="uid" id="id">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success needs-validation text-only" id="fname" name="fname"  placeholder="Enter Firstname">
                            <small id="fnameHelp" class="form-text text-danger" ></small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success needs-validation text-only" id="lname" name="lname"  placeholder="Enter Lastname">
                            <small id="lnameHelp" class="form-text text-danger" ></small>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                            <input type="email" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success needs-validation" id="useremail" name="useremail" aria-describedby="emailHelp" placeholder="someone@myexample.com">       
                             <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                        
                </div>
                <div class="col-12 col-lg-6">
                        <div class="form-group">
                            
                            <input type="text" class="form-control inputs inputs border-top-0 border-right-0 border-left-0 border-success needs-validation username" id="username" name="username" placeholder="Username">
                            <small id="usernamehelp" class="form-text text-danger" ></small>
                        </div>
                </div>
        </div>
            
             <div class="row">
                 <div class="col-12 col-lg-6">
                        <div class="form-group">
                        <!-- <div class="input-group"> -->
                                <small id="passwordhelp" class="form-text text-danger" ></small>
                                <input type="password" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success needs-validation" id="password" name="password" placeholder="Password">
                                <div class="input-group-append">
                                    <i class="fa fa-eye input-group-text eye border-0" onmouseover="displayPassword()" onmouseout="dontShow()"></i>
                                </div>
                                
                        <!-- </div> -->
                        
                        <!-- <small class="form-text text-dark">Password must be at least 8-characters</small> -->
                        
                    </div>
                </div>
                 
                 <div class="col-12 col-lg-6">
                        <div class="form-group"  id="repeatpassword">
                                <!-- <div class="input-group"> -->
                                        <small id="confirmhelp" class="form-text text-danger" ></small>
                                        <input type="password" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success needs-validation" id="confirmpassword" name="confirmpassword" placeholder = "Confirm Password" oninput="comparePasswords('password','confirmpassword','subtn');">
                                        <div class="input-group-append">
                                        <i class="fa fa-eye input-group-text eye border-0" onmouseover="displayPassword()" onmouseout="dontShow()"></i>
                                        </div>
                                <!-- </div> -->
                                
                            </div>
                </div>
             </div>  
             
             <div class="row">
                 <div class="col-12 col-lg-6">
                    <div class="form-group">
                            <select class="form-control inputs border-success" id="nationality" name="nationality">
                                <option>Nigeria</option>
                                <option>United States</option>
                                <option>Germany</option>
                                <option>England</option>
                            </select>
                    </div>
                 </div>
                 <div class="col-12 col-lg-6">
                    <div class="form-group">
                                <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success needs-validation" id="address" name="address"  placeholder="Address">
                                <small id="emailHelp" class="form-text text-danger" ></small>
                            </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-6 ">
                 <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input gender " id="male" name="gender" value ="male" <?php if(isset($gend)){if ($gend == "male") echo "checked";} ?>>
                        <label class="custom-control-label" for="male">Male</label>
                      </div>
                </div>
                 <div class="col-6">
                 <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input gender " id="female" name="gender" value ="female" <?php if(isset($gend)){if ($gend == "female") echo "checked";} ?>>
                        <label class="custom-control-label" for="female">Female</label>
                      </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-12 col-lg-6">
                 <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success needs-validation" id="phone" name="phone"  placeholder="Mobile Number">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                 </div>
                 <div class="col-12 col-lg-6">
                     
                 </div>
                 </div>
            </div>

                        </div>
                                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-5 col-xs-6">
                                <button type="button" class="btn btn-danger cancel" data-dismiss="modal"  onclick="javascript: if(!confirmCancel()){this.preventDefault();}">Cancel</button>
                            </div>
                            <div class="col-sm-5 col-xs-6">
                                <button type="submit" name = "update" id="subtn" class="btn btn-primary" disabled>Save</button>
                            </div>
                        </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
   

    

        

    
   