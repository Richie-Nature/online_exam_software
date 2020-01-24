

<?php 
    $query = "SELECT * FROM reg_users";
    if($_SESSION['access'] == 1){ $query .= " WHERE access_level < 1";}
    $result = $connection->query($query);
    confirm_query($result,$connection);
    $nOfUsers = mysqli_num_rows($result);
?>

<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>Current Users</h4>
            <p class="text-success">There <?php if($nOfUsers == 1)echo "is";else{echo "are";} ?> currently <strong><?php echo $nOfUsers;?></strong> <?php if($nOfUsers == 1)echo " User";else{echo " Users";} ?> available to You.</p>
            <small class="text-muted">*Users available to you for Editing depend on Seniority level</small>
        </div>
    </div>

            
        
            <table id="mytable" class="table table-striped table-bordered table-dark table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Edit</th>
                    
                </tr>
            </thead>
            <tbody>
            
                 <?php while($row = mysqli_fetch_assoc($result)):?>
                        
                <tr>
                <td><?php echo $row['id'];?></td>
                    <td><img src="images/<?php echo $row['picture'];?>" class="img-fluid" style ="max-height: 80px"></td>
                    <td><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td> <?php if($row['access_level'] <1){echo "User";}elseif($row['access_level']>1){echo "Super Admin";}else{echo "Admin";} ?></td>
                    <td>
                        <div class="container">                                       
                        <div class="dropright">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            Options
                            </button>
                            <div class="dropdown-menu cust-drop">
                            <form action="" method="post">
                                <input type="hidden" name="addId" value="<?php echo $row['id'];?>">
                                <p class="dropdown-item mb-1" style="display:<?php if($row['access_level'] ==2){echo "none";} ?>"> 
                                <button type="submit" name="add" class="btn btn-sm btn-primary drop-btn ml-3"  <?php if($row['access_level'] ==2 || $row['access_level'] <0){echo "disabled";} ?>><?php if($row['access_level'] ==1){echo "Make(SuperAdmin)";}elseif($row['access_level'] ==0){echo "Make(Admin)";} ?></button> </p>
                            </form>
                            
                            <p class="dropdown-item mb-1">
                            <button type="button" name="edit" id="edit" class="btn btn-sm btn-primary drop-btn ml-3"
                                data-toggle="modal" data-target="#createAdminModal" data-backdrop="static"
                                data-id="<?php echo $row['id'];?>"
                                data-fname="<?php echo $row['firstname'];?>"
                                data-lname="<?php echo $row['lastname'];?>"
                                data-uname="<?php echo $row['username'];?>"
                                data-email="<?php echo $row['email'];?>"
                                data-nation="<?php echo $row['nationality'];?>"
                                data-address="<?php echo $row['address'];?>"
                                data-phone="<?php echo $row['phone'];?>"
                                data-gender="<?php echo $row['gender'];?>"
                                data-access="<?php echo $row['access_level'];?>"
                                data-picture="<?php echo $row['picture'];?>" 
                                data-password="<?php echo $row['hashed_password'];?>"
                            >Edit</button></p>
                            <form action="" method="post">
                                <input type="hidden" name="susId" value="<?php echo $row['id']; ?>">
                                <p class="dropdown-item mb-1"><button type="submit" name="suspend" class="btn btn-sm btn-primary drop-btn ml-3"<?php if($row['access_level'] ==2){echo "disabled";}?>>Suspend</button></p>
                            </form>
                            <form action="" method="post">
                            <input type="hidden" name="delid" value="<?php echo $row['id']; ?>">
                                <p class="dropdown-item mb-1"><button type="submit" name="delete" class="btn btn-sm btn-danger drop-btn ml-3" onclick="javascript:return confirm('Are you sure you want to delete this record?\nThis action cannot be reversed!');">Delete</button></p>
                            </form>
                            
                            </div>
                        </div>
                        </div>
                    
                    </td>
                </tr>
<?php endwhile;?>
            </tbody>
        </table>
        
        <script>
            $(document).on("click", '#edit', function(e){
                var id = $(this).data('id');
                var fname = $(this).data('fname');
                var lname = $(this).data('lname');
                var uname = $(this).data('uname');
                var email = $(this).data('email');
                var nation = $(this).data('nation');
                var address = $(this).data('address');
                var phone = $(this).data('phone');
                // var gender = $(this).data('gender');
                var access = $(this).data('access');
                var picture = $(this).data('picture');
                var password = $(this).data('password');

                $("#id").val(id);
                $("#fname").val(fname);
                $("#lname").val(lname);
                $("#useremail").val(email);
                $(".username").val(uname);
                $("#nationality").val(nation);
                $("#address").val(address);
                //$("#male").val(gender);
                $("#phone").val(phone);
                $("#acc").val(access);
                $("img").attr("src", "images/"+picture);
                $("#pic").val(picture);
                $("")
            });
        </script>
        
        <?php include("create-admin.php");?> 



</div>
</div>
