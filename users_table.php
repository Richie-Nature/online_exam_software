<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin|Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="includes/style.css"> 
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
</head>
<body class = "content-area">

<?php 
    $query = "SELECT * FROM reg_users";
    $result = $connection->query($query);
    confirm_query($result,$connection);
    $nOfUsers = mysqli_num_rows($result);
?>

<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>Current Users</h4>
            <p class="text-success">There <?php if($nOfUsers == 1)echo "is";else{echo "are";} ?> currently <strong><?php echo $nOfUsers;?></strong> <?php if($nOfUsers == 1)echo " User";else{echo " Users";} ?></p>
        </div>
    </div>
            
        <table id="mytable" class="table table-striped table-bordered table-dark">
            <thead>
                <tr>
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
                    <th>Certifications</th>
                    <th>Gender</th>
                    <th>Access Level</th>
                    <th>Registration Date</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><img src="images/<?php echo $row['picture'];?>" class="img-fluid"></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td>********</td>
                    <td><?php echo $row['nationality'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['no_of_certs'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['access_level'];?></td>
                    <td><?php echo $row['reg_date'];?></td>
                    
                    <td>
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
                    <form action="edit_student.php" method = "POST">
                        <input type="hidden" name="uid" value = "<?php echo $id;?>">
                        <input type="hidden" name="fname" value = "<?php echo $firstname;?>">
                        <input type="hidden" name="lname" value = "<?php echo $lastname?>">
                        <input type="hidden" name="uname" value = "<?php echo $username?>">
                        <input type="hidden" name="email" value = "<?php echo $email?>">
                        <input type="hidden" name="password" value = "">
                        <input type="hidden" name="nation" value = "<?php echo $nationality;?>">
                        <input type="hidden" name="address" value = "<?php echo $address;?>">
                        <input type="hidden" name="phone" value = "<?php echo $phone;?>">
                        <input type="hidden" name="certs" value = "<?php echo $certs ?>">
                        <input type="hidden" name="gender" value = "<?php echo $gender;?>">
                        <input type="hidden" name="access" value = "<?php echo $access;?>">
                        <input type="hidden" name="picture" value = "<?php echo $row['picture'];?>">
                        <button type="submit" name = "edit" class = "btn btn-sm btn-success">Get User's Data</button>
                    </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
            <tr>
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
                    <th>Certifications</th>
                    <th>Gender</th>
                    <th>Access Level</th>
                    <th>Registration Date</th>
                    
                    <th>Action</th>
                </tr> 
            </tfoot>
        </table>
    <a href="edit_student.php" class = "btn btn-sm btn-danger">Cancel</a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        
        $(document).ready(function() {
       $('#mytable').DataTable();
       } );
    </script>
</body>
</html>