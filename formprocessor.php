<?php 
session_start();
require_once("connection.php");
require_once("functions.php");
//checks whether user hits submit buton
if(isset($_POST["regUser"])){
    $access =    $_POST['access'];
    $username = check_input($_POST['uname']);
    $firstname = check_input($_POST['fname']);
    $lastname = check_input($_POST['lname']);
    $email   = check_input($_POST['email']);
    $pass1   = check_input($_POST['pass1']);
    $pass2  = check_input($_POST['pass2']);
    $gender = $_POST['gender'];
    $regdate = $_POST['regdate'];

    if(empty($username)){
        header("Location: reguser.php?error=empty");
        exit();
    }
    if($pass1 !== $pass2){
        header("Location: reguser.php?password=error");
        exit();
    }else{
     
    $queryUser = "SELECT * FROM students_reg WHERE
     username = '$username'";
     $resultUser = $con->query($queryUser);
     $numrows = mysqli_num_rows($resultUser);
     if($numrows > 0){
         header("Location: reguser.php?usernameexist");
         exit();
        }
    $passencrypt = sha1($pass1);
        $file = $_FILES['file'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];
    
    
        $fileExt = explode('.',$fileName );
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed = array('jpg', 'jpeg','png');
        if(!empty($fileName)){
        if (in_array($fileActualExt, $allowed)) {
            if($fileError===0){
                if($fileSize< 1000000){
                   $fileNameNew = $username . ".".$fileActualExt;
                   $fileDestination = 'uploads/'.$fileNameNew;
                   move_uploaded_file($fileTmpName,$fileDestination);
                //    header("Location: index.php?uploadsuccess");
                }else{
                   header("Location: reguser.php?filetoolarge");
                   exit();
                }
                  }else{
                     header("Location: reguser.php?therewasanerror");
                     exit();
                }
                   }else{
                    header("Location: reguser.php?filenotallowed");
                    exit();
          }
        }else{
            $default = "default.png";
            $fileNameNew = "uploads/".$default;
        }

          



    $query = "INSERT INTO students_reg (access, username, firstname, 
    lastname, email, password, gender, regdate, passport) VALUES
   ('$access','$username', '$firstname', '$lastname', '$email', '$passencrypt', '$gender', 
   '$regdate', '$fileNameNew')";
    
    $result = mysqli_query($con, $query);
    confirm_query($result, $con);
        echo " <script>
                  alert('Your details have been submitted');
                  window.location='index.php';
               </script>";
    }





}


if(isset($_POST['loginUser'])){
  $username = check_input($_POST['username']);
  $password = check_input($_POST['password']);

  if(!empty($username ) AND !empty($password)){
     $encrytPass = sha1($password);
     $loginQuery = " SELECT * FROM students_reg
     WHERE username = '$username' AND password = 
     '$encrytPass'"; 
     $resultLogin = $con->query($loginQuery);
     confirm_query($resultLogin, $con);
     $loginRows = mysqli_num_rows($resultLogin);
     if($loginRows > 0){
        $row = mysqli_fetch_assoc($resultLogin);
        $_SESSION['username'] =$row['username'];
        $_SESSION['access'] = $row['access'];
        $_SESSION['id'] =  $row['id'];
        echo "<script>
           alert('login was successful');window.location='home.php';
        </script>";
     }
  }else{
    echo "<script>
      alert('your input fields are blank');
      window.location = 'login.php';
    </script>";
}

}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
}

##############################################################################
// $file = $_FILES['newPhoto'];
//             $profile = $file['name'];
//             $fileTmpName = $file['tmp_name'];
//             $fileSize = $file['size'];
//             $fileError = $file['error'];
//             $fileType = $file['type'];

//             $fileExt = explode('.',$profile);
//             $fileActualExt = strtolower(end($fileExt));

//             $allowed = array('jpg', 'jpeg', 'png');
//             if(!empty($profile)){
//                 if(in_array($fileActualExt, $allowed)) {
//                     if($fileError === 0){
//                         if($fileSize < 2000000){
//                             $profile = time() . '_' . $profile . $fileActualExt; #using current timestamp to prefix image name in case of shared names
//                             $target = "images/" . $profile; #final destination
//                         }else{
//                             $msg = "Image too large";
//                         }
//                     }else{
//                         $msg = "An Error occured uploading this image.Try again.";
//                     }
//                 }else{
//                     $msg = "Image type not allowed.Image must be in jpg, jpeg or png";
//                 }
//             }else{
//                 $default = $imgValue;
//                 $profile = time() . '_' . $default . $fileActualExt;
//                 $target = "images/" . $profile; 
//             }
#######################################################################################
