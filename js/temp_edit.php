
    
    <div class="container">
    <div class="row">
        <div class="col-sm-8  offset-2">
            <div class=" form-border">
            <form action="edit_admins.php" method="POST" enctype = "multipart/form-data">
                    <div class="row mb-4">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xl-3">
                <div class="form-group text-center">
                    <div class="" id="profile-container">
                    <img src="images/<?php if(isset($profile)){echo $profile;}else{echo "profileicon1.png";}?>" alt="" id = "profileDisplay" class = "img-fluid" onclick = "triggerClick('profileImage')">
                </div>
                    <label for="profileImage"><strong>Upload Photo</strong></label>
                        <input type="file" name="profileImage" onchange="displayImage(this,'profileDisplay');" id="profileImage" style = "display:none;">
                    </div>                    
                </div>
            <div class="col-lg-7 col-md-8 col-xl-6">
                <h4 class="">Edit Existing Admins</h4>
            </div>
            <div class="col-lg-3">
                <a href="admin_table.php" class = "btn btn-info" >View Admins</a>
            </div>
            </div><!-- row-->
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="fname" name="fname"  placeholder="Enter Firstname" value = "<?php if(isset($firstname)){echo $firstname;} ?>">
                            <small id="fnameHelp" class="form-text text-danger" ></small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="lname" name="lname"  placeholder="Enter Lastname" value = "<?php if(isset($lastname)){echo $lastname;} ?>">
                            <small id="lnameHelp" class="form-text text-danger" ></small>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="useremail" name="useremail" aria-describedby="emailHelp" placeholder="someone@myexample.com" value = "<?php if(isset($email)){echo $email;} ?>">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                        
                </div>
                <div class="col-12 col-lg-6">
                        <div class="form-group">
                            
                            <input type="text" class="form-control inputs inputs border-top-0 border-right-0 border-left-0 border-success" id="username" name="username" placeholder="Username" value = "<?php if(isset($username)){echo $username;} ?>"
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
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="nationality" name="nationality"  placeholder="Nationality" value = "<?php if(isset($nation)){echo $nation;} ?>">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                 </div>
                 <div class="col-12 col-lg-6">
                 <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="address" name="address"  placeholder="Address" value = "<?php if(isset($contact)){echo $contact;} ?>">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-6 ">
                 <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input" id="male" name="gender" value ="male" <?php if(isset($gend)){if ($gend == "male") echo "checked";} ?>>
                        <label class="custom-control-label" for="male">Male</label>
                      </div>
                </div>
                 <div class="col-6">
                 <div class="custom-control custom-radio ">
                        <input type="radio" class="custom-control-input" id="female" name="gender" value ="female" <?php if(isset($gend)){if ($gend == "female") echo "checked";} ?>>
                        <label class="custom-control-label" for="female">Female</label>
                      </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-12 col-lg-6">
                 <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="phone" name="phone"  placeholder="Mobile Number" value = "<?php if(isset($phoneNo)){echo $phoneNo;} ?>">
                            <small id="emailHelp" class="form-text text-danger" ></small>
                        </div>
                 </div>
                 <div class="col-12 col-lg-6">
                     <div class="form-group">
                         <input type="number" name="acc" id="acc" class="form-control border-top-0 border-right-0 border-left-0 inputs border-success" max= 3 min = 0 placeholder = "Set Access" value = "<?php if(isset($access))echo $access;?>">
                     </div>
                 </div>
                 </div>
            </div>
            
                        
                 <input type="hidden" name="id" value = "<?php if(isset($id)){echo $id;} ?>">
                 <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" id="loggedIn" name="loggedIn" checked>
                        <label class="custom-control-label" for="loggedIn">Remember Password</label>
                      </div>
                      <div class="row mt-4">
                          <div class="col-12  col-md-4 mb-2">
                              <button type="submit" class="btn btn-success" name = "update" >Save Changes</button>
                          </div>
                          <div class="col-12 col-md-4 mb-2">
                          <form action="edit_admins.php" method = "POST" >
                             <input type="hidden" name="delid" value = "<?php if(isset($id)) {echo $id;}?>">
                             <button type="submit" class = "btn btn-danger" name = "delete" onclick="javascript:return confirm('Are you sure you want to delete this record?\nThis action cannot be reversed!');" >Delete User</button>
                            </form>  
                          </div>
                          <div class="col-4  col-md-4">
                              <button class = "btn  btn-danger" data-toggle="modal" data-target="#newAdminModal" data-backdrop="static" data-keyboard="false">Add New Admin</button>
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

<!-- The Modal -->
<div class="modal fade" id="newAdminModal">
<?php 
    $query = "SELECT * FROM reg_users";
    $result = $connection->query($query);
    confirm_query($result,$connection);
    $nOfUsers = mysqli_num_rows($result);
?>
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Select User to Add</h4>
                        <button type="submit" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body modal-table">
                        <div class="container">
                            <table id="mytable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                <tr><th>Select</th>
                                    <th>Id</th>
                                    <th>Picture</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Nationality</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Access Level</th>
                                    <th>Registration Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php while($row = mysqli_fetch_assoc($result)):?>
                                        
                                <tr><td>
                                    <form action="" method="post" id="modForm">
                                        <input type="hidden" name="uid" value = "<?php echo $row['id'];?>">
                                        <input type="hidden" name="fname" value = "<?php echo $row['firstname'];?>">
                                        <input type="hidden" name="lname" value = "<?php echo $row['lastname'];?>">
                                        <input type="hidden" name="uname" value = "<?php echo $row['username'];?>">
                                        <input type="hidden" name="email" value = "<?php echo $row['email'];?>">
                                        <input type="hidden" name="password" value = "">
                                        <input type="hidden" name="nation" value = "<?php echo $row['nationality'];?>">
                                        <input type="hidden" name="address" value = "<?php echo $row['address'];?>">
                                        <input type="hidden" name="phone" value = "<?php echo $row['phone'];?>">
                                        <input type="hidden" name="gender" value = "<?php echo $row['gender'];?>">
                                        <input type="hidden" name="access" value = "<?php echo $row['access_level'];?>">
                                        <input type="hidden" name="picture" value = "<?php echo $row['picture'];?>">
                                        <button type="button"  class = "btn btn-sm btn-danger sel-but buttons active" name="select" onclick = "selected(this,'modTablei');"><i class="far fa-circle modTablei"id="modTablei" ></i></button>
                                     </form>
                                    </td>
                                <td><?php echo $row['id'];?></td>
                                    <td><img src="images/<?php echo $row['picture'];?>" class="img-fluid" style ="max-height: 60px;"></td>
                                    <td><?php echo $row['firstname'];?></td>
                                    <td><?php echo $row['lastname'];?></td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td>********</td>
                                    <td><?php echo $row['nationality'];?></td>
                                    <td><?php echo $row['address'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td><?php echo $row['gender'];?></td>
                                    <td><?php echo $row['access_level'];?></td>
                                    <td><?php echo $row['reg_date'];?></td>

                                    
                                </tr>
                <?php endwhile;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Select</th>
                                    <th>Id</th>
                                    <th>Picture</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Nationality</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Access Level</th>
                                    <th>Registration Date</th>
                                    
                                    
                                </tr>
                        </tfoot>
                        </table>
                     </div>
                                        <!-- Modal footer -->
                        <div class="modal-footer">
                             <button type="submit"  class="btn btn-danger" data-dismiss="modal" onclick = "triggerClick('crModalBtn')">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                <button id="crModalBtn" class = "btn  btn-danger" style="display:none;" data-toggle="modal" data-target="#createAdminModal" data-backdrop="static"></button>
<?php @require_once("create-admin.php");?>
<?php 
                        $id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $username = $row['username'];
                        $email = $row['email'];
                        $nationality = $row['nationality'];
                        $address = $row['address'];
                        $phone = $row['phone'];
                        $certs = $row['no_of_certs'];
                        $gender = $row['gender'];
                        $access = $row['access_level'];
                    ?>

                    <form action="edit_users.php" method = "POST">
                   
                        <button type="submit" name = "edit" class = "btn btn-sm btn-success">Get Admin Data</button>
                    </form>