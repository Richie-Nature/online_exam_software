<?php
 $msg = "";
 $css_class = "";

 $connection = mysqli_connect('localhost','root','','image-upload');
if(!$connection){
    die("could not connect to database" .mysqli_connect_error());
}
 if (isset($_POST['saveUser'])) {
  
    echo "<pre>", print_r($_FILES['profileImage']['name']),"</pre>";
     
     $bio = $_POST['bio'];
     $profileImage = time() . '_' . $_FILES['profileImage']['name'];
     
     $target = "image/" . $profileImage; #final destination
     if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
         $query = "INSERT INTO users (profile_image, bio) VALUES ('$profileImage', '$bio')";
         if(mysqli_query($connection, $query)){
             $msg = "Image uploaded and saved to databse";
             $css_class = "alert-success";
         }else {
             $msg = "Database Error: Failed to save user";
             $css_class = "alert-danger";
         }
        
     }else {
         $msg = "Failed to upload profile picture";
         $css_class = "alert-danger";
     }
 }