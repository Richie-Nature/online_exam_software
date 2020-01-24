<?php @require_once("processform.php"); ?>
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
                <form action="index.php" method="post" enctype = "multipart/form-data">

                <h3 class="text-center">Create Profile</h3>
                <?php if(!empty($msg)): ?>
                    <div class = "alert <?php echo $css_class ?>">
                        <?php echo $msg; ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="profileImage">Profile Image</label>
                        <input type="file" name="profileImage" id="profileImage" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button name = "saveUser" class="btn btn-primary btn-block">Save User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>