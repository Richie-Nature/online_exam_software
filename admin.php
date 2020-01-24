<?php session_start(); ?>
<?php $admin_page = "Admin"; ?>
<?php @require_once("includes/connection.php");?>
<?php @require_once("includes/functions.php");?>

<?php 
    if(logged_in()) {
        redirect_to("dashboard.php");
    }
?>

<?php
    if(isset($_POST['submit'])) {
        $username = check_input($_POST['username']);
        $password = check_input($_POST['password']);

        if(!empty($username) ) {
            $encryptPwd = sha1($password);

            $query = "SELECT * FROM reg_users WHERE username = '$username' AND hashed_password = '$password' LIMIT 1";
            $result = $connection->query($query);
            confirm_query($result,$connection);

            $checkUser = mysqli_num_rows($result);
            if($checkUser > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                $_SESSION['access'] = $row['access_level'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['profile'] =  $row['picture'];
                $_SESSION['password'] = $row['hashed_password'];
                $name = $row['firstname']  ." ". $row['lastname'];
                $_SESSION['name'] = $name;

                echo "<script>
                        alert('Login Successful');window.location='dashboard.php';
                    </script>";
            }else{
                echo "Invalid Login Credentials";
            }
        }else {
            echo "Fill all fields!";
        }
    }else if(isset($_GET['out'])) {
        echo "You are now logged out.";
    }
?>
<?php @require("includes/admin-header.php");?>
<body style = "background-color: black; color: white" class = "text-light">
<div class="container">
        <div class="jumbotron w-75 mt-5 jumbo bg-dark text-light">
            <h1 class="display-4">Online Exam Software</h1>
            <hr class="my-4">
            <p class="text-muted">Sign in to your account, set Exams Today!</p>
            <hr class="my-4">
            <div class="container">
    <div class="row mt-5">
        <div class="col-sm-8 ">
            <div class=" form-border login-form">
            <form action="admin.php" method="POST">
                
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                            <input type="text" class="form-control inputs border-top-0 border-right-0 border-left-0 border-success" id="username" name="username" placeholder="Username or Email">
                        </div>
                        
                </div>
        </div>
             <div class="row">
                 <div class="col-10 col-lg-6">
                        <div class="form-group">
                                <input type="password" class="form-control inputs inputs border-top-0 border-right-0 border-left-0 border-success" id="password" name="password" placeholder="Password">
                                
                        </div>
                </div>
                <div class="col-2 col-lg-2">
                    <i class="fa fa-eye input-group-text eye border-0" onmouseover="displayPassword()" onmouseout="dontShow()"></i>
                </div>
                 
             </div>  
             
            
             <div class="row mt-4">
                          <div class="col-4 col-sm-5 col-md-4">
                              <button type="submit" class="btn btn-success" name = "submit" >Sign In</button>
                          </div> 
            </div>
            <a href="">Forgotten Password?</a>
            </form>
        </div>
    </div>
    
</body>
</html>