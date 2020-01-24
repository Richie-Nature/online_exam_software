<?php ob_start()?>
<?php include_once("includes/edit-profile.php") ?>

<?php
    $query = "SELECT * FROM reg_users WHERE id = $_SESSION[user_id];";
    $result = $connection->query($query);
    confirm_query($result,$connection);
?>
<div class="container-fluid">
<div class="row">
<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 div-height">
  <!-- Brand -->
        <p class = "navbar-brand fc">Online Exam Software</p>    
</div>
<div class="col-6 col-sm-8 col-md-8 col-lg-9 col-xl-10 custnav" >
  <nav class="navbar  navbar-expand-sm navbar-light bg-light">
                <!-- <button class="collapsible btn btn-small" type="button" id="menubtn" >
                <i class="fas fa-bars text-danger"></i><i class="fas fa-ellipsis-v text-danger"></i>
                </button> -->

                

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <!-- <div class="row">
                <div class="col-md-12 "> -->
                  <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item dropdown ml-3">
                    <div class="dropdown  nav-drop">
                      <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" >
                          <i class="fas fa-envelope cust-fa"><!--<span class="badge badge-pill badge-danger pill">1</span>--></i> 
                          </a>
                          <div class="dropdown-menu" >
                            <a class="dropdown-item" href="">Inbox</a>
                            <a class="dropdown-item" href="">Sent Messages</a>
                        </div>
                    </div>   
                 </li>
                
                <li class="nav-item dropdown ml-3">
                  <div class="dropdown nav-drop">
                    <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">
                  <i class="fas fa-clipboard-list cust-fa"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">lorem</a>
                    <a class="dropdown-item" href="#">ipsum</a>
                  </div>
                </div>
                </li>

                <li class="nav-item dropdown ml-3">
                  <div class="dropdown nav-drop">
                      <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown">
                    <i class="fas fa-bell cust-fa"><!--<span class="badge badge-pill badge-warning pill">new</span>--></i>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Notifications <span class = "badge badge-primary">4</span> </a>
                      <a class="dropdown-item" href="#">Reminders <span class="badge badge-primary">2</span> </a>
                  </div>
                </li>


                  <li class="nav-item dropdown ml-3"> 
                    <div class="dropdown nav-drop">
                      <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown">
                  <i class="fas fa-user cust-fa"></i> <span><?php echo $_SESSION['name']; ?></span> </i>
                  </a>
                  <div class="dropdown-menu">
                  <?php while($row = mysqli_fetch_assoc($result)):?>
                  
                    <a class="dropdown-item" data-toggle="modal" id="editPro" href="#editProfileModal"
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
                    >Edit profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="admin_logout.php">Sign Out</a>
                  </div>
                  <?php endwhile;?>
                    </div>
                  
                </li>
                
              </ul>
                <!-- </div>
              </div> -->
              
              
            </div>
            </div>
          </nav> 
</div>
  
</div>
</div>
<script>
            $(document).on("click", '#editPro', function(e){
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

                
                $("#hidOldPass").val(password);
                $("#username").val(uname);
            });
        </script>