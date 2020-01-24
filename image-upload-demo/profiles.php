<?php @require_once("processform.php"); ?>
<?php 
    $query = "SELECT * FROM users";

    $result = $connection->query($query);
    // $users = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Image Preview and Upload PHP</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">
               <table class="table table-bordered">
                   <thead>
                       <th>Profile Image</th>
                       <th>Bio</th>
                   </thead>
                   <tbody>
                       <?php while($user = mysqli_fetch_assoc($result)): ?>
                       <tr>
                       <td><img src="image/<?php echo $user['profile_image'];?>" alt="" class = "img-fluid" width="80"></td>
                       <td><?php echo $user['bio']; ?></td>
                    </tr>
<?php endwhile; ?>
                   </tbody>
               </table>
            </div>
        </div>
    </div>

    
</body>
</html>