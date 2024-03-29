<?php session_start(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in();?>
<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<div class="container-fluid">
<?php  require_once("includes/admin-sidebar.php"); ?>



   <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-6 content-area">
      <div class="row">
        <div class="col-sm-6 col-12">
          <h3>Manage Users > Users</h3>
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
            $certs = $_POST['certs'];
            $gend = $_POST['gender'];
            $access = $_POST['access'];
            $profile = $_POST['picture'];
        }

        if(isset($_POST['update'])) {
            $msg ="";
            $css_class = "";

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $useremail = $_POST['useremail'];
            $uname = $_POST['username'];
            $password = $_POST['password'];
            $nationality = $_POST['nationality'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $passencrypt = sha1($password);
            $access_level = $_POST['acc'];
            $id = $_POST['id'];
            $profileImage = time() . '_' . $_FILES['profileImage']['name'];#using current timestamp to prefix image name in case of shared names

            $target = "images/" . $profileImage; #final destination
            if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
                
           

            $query = "UPDATE reg_users set username = '$uname', firstname = '$fname', lastname = '$lname', gender = '$gender', email = '$useremail', address = '$address', nationality = '$nationality',phone = '$phone',hashed_password = '$passencrypt', access_level = '$access_level',
            picture = '$profileImage' 
            WHERE id = $id";
            $update = $connection->query($query);
            confirm_query($update,$connection);
            if($update) {
                echo "<script>
                     alert('Records Updated');
                     window.location = edit_student.php;
                    </script>"; 
                }
            }else {
                $msg = "Failed to upload profile picture";
                echo $msg;
                $css_class = "alert-danger";
            }
        }
    ?>

    <!--DELETE HANDLER GOES HERE-->
 <?php 
if(isset($_POST['delete'])) {
    $id = check_input($_POST['delid']);

    $query = " DELETE FROM reg_users WHERE id = $id";
    $update = $connection->query($query);
    if($update){ echo "<script>
                     alert('Records Updated');
                     window.location = 'edit_student.php';
                     </script>";
      }else{
        echo "<script>
        alert('Record Update Failed');
        window.location = 'edit_student.php';
        </script>";
      }             
    }

?>    
    <div class="container">
    <div class="row">
        <div class="col-sm-8  offset-2">
            <div class=" form-border">
            <form action="edit_student.php" method="POST" enctype = "multipart/form-data">
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
                <h4 class="">Edit Existing Users</h4>
            </div>
            <div class="col-lg-3">
                <a href="users_table.php" class = "btn btn-info" >View Users</a>
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
                         <input type="number" name="acc" id="acc" class="form-control inputs border-success" max= 3 min = 0 placeholder = "Set Access">
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
                          <div class="col-12 col-sm-5 col-md-6 mb-2">
                              <button type="submit" class="btn btn-success" name = "update" >Save Changes</button>
                          </div>
                          <div class="col-12 col-md-6 ">
                          <form action="edit_student.php" method = "POST" >
                             <input type="hidden" name="delid" value = "<?php if(isset($id)) {echo $id;}?>">
                             <button type="submit" class = "btn btn-danger" name = "delete" onclick="javascript:return confirm('Are you sure you want to delete this record?\nThis action cannot be reversed!');" >Delete User</button>
                            </form>  
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

<script src="js/admin.js"></script>
<?php require_once("includes/admin-footer.php"); ?>