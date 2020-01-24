<?php include_once("includes/connection.php"); ?>
<?php 
        if(isset($_POST['uploadBtn'])) {
            $profile = time() . '_' . $_FILES['side-profile']['name'];
            $target = "images/" .$profile;
            if(move_uploaded_file($_FILES['side-profile']['tmp_name'], $target)){  
                $sessionId = $_SESSION['user_id'];          
                $query = "UPDATE reg_users set picture = '$profile' WHERE id = $sessionId";
                $result = $connection->query($query);
                confirm_query($result,$connection);
                if($result) {
                    $_SESSION['profile'] = $profile;
                    echo "<script>
                    alert('Records Updated');
                    window.location = edit_users.php;
                    </script>"; 
                }else{
                    $msg = "Failed to upload profile picture";
                    echo $msg;
                    $css_class = "alert-danger";
                }
            }
        }
    ?>