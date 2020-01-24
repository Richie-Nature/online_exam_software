<?php session_start(); ?>
<?php $admin_page = "User Info"; ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in();?>
<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<?php require_once("includes/admin-sidepic.php");?>
<div class="container-fluid">
<?php  require_once("includes/admin-sidebar.php"); ?>
   <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-6 content-area">
      <div class="row">
        <div class="col-sm-6 col-12">
          <h4>Manage Users </h4>
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
            $id = $_POST['uid'];
            // $profile = time() . '_' . $_FILES['newPhoto']['name'];#using current timestamp to prefix image name in case of shared names

            // $target = "images/" . $profile; #final destination
            // if(move_uploaded_file($_FILES['newPhoto']['tmp_name'], $target)) {
                
           

            $query = "UPDATE reg_users set username = '$uname', firstname = '$fname', lastname = '$lname', gender = '$gender', email = '$useremail', address = '$address', nationality = '$nationality',phone = '$phone',hashed_password = '$passencrypt' WHERE id = '$id'";
            $update = $connection->query($query);
            confirm_query($update,$connection);
            if($update) {
                echo "<script>
                     alert('Records Updated');
                     window.location = edit_users.php;
                    </script>"; 
                }
            // }else {
            //     $msg = "Failed to upload profile picture";
            //     echo $msg;
            //     $css_class = "alert-danger";
            // }
        }
    ?>

    <?php
        #Own Update
        if(isset($_POST['ownUpdate'])){
           $new_name = $_POST['newname'];
           $oldPassword = $_POST['oldpass'];
           $newPass = $_POST['confirm'];
           $passencrypt = sha1($newPass);
           $id = $_SESSION['user_id'];

        //    if(compareOldPassword(sha1($oldPassword), $passencrypt)){
            $query = "UPDATE reg_users set username = '$new_name',hashed_password = '$passencrypt' WHERE id = '$id'";
            $update = $connection->query($query);
            confirm_query($update,$connection);
            if($update) {
                echo "<script>
                     alert('Records Updated');
                     window.location = edit_users.php;
                    </script>"; 
                }
        //    }
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
                     window.location = 'edit_users.php';
                     </script>";
      }else{
        echo "<script>
        alert('Record Update Failed');
        window.location = 'edit_users.php';
        </script>";
      }             
    }
    ?> 
    <?php 
        if(isset($_POST['suspend'])){
            $id = check_input($_POST['susId']);

            $query = "UPDATE reg_users set access_level = -1 WHERE id = $id";
            $result = $connection->query($query);
            if($result){
                echo "<script>
                     alert('Records Updated');
                     window.location = 'edit_users.php';
                     </script>";
            }else{
                echo "<script>
                alert('Record Update Failed');
                window.location = 'edit_users.php';
                </script>";
            }
        }
    ?>
    <?php 
        if(isset($_POST['add'])) {
            $id = check_input($_POST['addId']);

            $query = "UPDATE reg_users set access_level = 1 WHERE id = $id";
            $result = $connection->query($query);
            if($result){
                echo "<script>
                     alert('Records Updated');
                     window.location = 'edit_users.php';
                     </script>";
            }else{
                echo "<script>
                alert('Record Update Failed');
                window.location = 'edit_users.php';
                </script>";
            }
        }
    ?>
            <?php include("admin_table.php"); ?>
            <!-- <script>
            $(document).ready(function(){
                $('#edit').submit(editUser);
            });

            function editUser(e) {
                e.preventDefault();
                let form_data = {
                    id: $("[name='uid']").val(),
                    fname: $("[name='fname']").val(),
                    lname: $("[name='lname']").val(),
                    uname: $("[name='uname']").val(),
                    email: $("[name='email']").val(),
                    nation: $("[name='nation']").val(),
                    address: $("[name='uid']").val(),
                    phone: $("[name='phone']").val(),
                    gender: $("[name='gender']").val(),
                    access: $("[name='access']").val(),
                    picture: $("[name='picture']").val()
                };
                $.ajax({
                    url:"edit_users.php",
                    type: "POST",
                    data: form_data,
                    dataType: "json",
                    cache: false,

                    success: function (json) {
                        if (json.error==1)
                        {
                            //Show the user the errors.
                            $('#EditUserError').html(json.message);
                        } else {
                            //Hide our form
                            $('#edituserform').slideUp();
                            //Show the success message
                            $('#EditUserError').html(json.message).show();
                        }
                    }
                });
            }
        </script>  -->
<script src="js/admin.js"></script>
<script src="js/form-processor.js"></script>
<?php include("includes/admin-footer.php"); ?>