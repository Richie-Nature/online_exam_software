<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/admin-header.php");?>
<div class="admin-table-bg">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>Current Admins</h4>
            <p class="text-light">There are currently <strong>..</strong>Admin Users</p>
        </div>
    </div>  
            
        <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
               <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
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
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>Jdoe</td>
                    <td>jonny@example.com</td>
                    <td>dddfff</td>
                    <td>Czech</td>
                    <td>24 some street</td>
                    <td>214-123-355</td>
                    <td>Male</td>
                    <td>1</td>
                    <td><?php echo date('Y-m-d h-i-sa');?></td>
                    <td><img src="img/profileicon1.png" alt="" class="img-fluid"></td>
                    <td>
                    <form action="" method = "POST">
                        <input type="hidden" name="uid" value = "">
                        <input type="hidden" name="fname" value = "">
                        <input type="hidden" name="lname" value = "">
                        <input type="hidden" name="uname" value = "">
                        <input type="hidden" name="email" value = "">
                        <input type="hidden" name="password" value = "">
                        <input type="hidden" name="nation" value = "">
                        <input type="hidden" name="address" value = "">
                        <input type="hidden" name="phone" value = "">
                        <input type="hidden" name="gender" value = "">
                        <input type="hidden" name="access" value = "">
                        <button type="submit" name = "edit" class = "btn btn-sm btn-success">Get Admin Data</button>
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
        
<a href="edit_admins.php" class = "btn-sm btn btn-danger">Cancel</a>


</div>
</div>


<?php require_once("includes/admin-footer.php"); ?>