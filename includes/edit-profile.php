<div class="modal fade" id="editProfileModal">

            <div class="modal-dialog modal-md modal-dialog-scrollable ">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Profile</h4>
                        <button type="submit" class="close" data-dismiss="modal" onclick="javascript: if(!confirmCancel()){this.preventDefault();}">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7  col-xs-6 offset-xs-2 form-div">
                                    <form action="" method="post" enctype = "multipart/form-data">
                                        <h3 class="text-center">Edit Profile</h3>

                                        <div class="form-group text-center">
                                            <img src="images/<?php if(isset($_SESSION['profile'])){echo $_SESSION['profile'];}else{echo "placeholder.png";}?>" alt="" id = "ownProfile" class = "img-fluid" onclick = "triggerClick('side-profile')">
                                            <label for="side-profile">Change Profile Picture</label>
                                            <input type="file" name="side-profile" id="side-profile" style = "display:none;" onchange="displayImage(this,'ownProfile')" >
                                            <small class="text-danger form-text"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class= "form-label">Change Username</label>
                                            <input type="text" name="newname" id="username" class="form-control">
                                            <small class="text-danger form-text"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="oldpass" class= "form-label">Old Password</label><small class="text-danger form-text"></small>
                                            <input type="password" name="oldpass" id="oldpass" class="form-control" placeholder = "Enter Old Password" onblur="compareOldPassword('hidOldPass','oldpass','ownUpdate')" >
                                            <input type="hidden" name="originalPass" id="hidOldPass">
                                        </div>
                                        <div class="form-group">
                                            <label for="newpass" class= "form-label">New Password</label><small class="text-danger form-text"></small>
                                            <input type="password" name="newpass" id="newpass" class="form-control" placeholder = "Enter New Password" onchange="document.getElementById('confirmDiv').style.display='block'">
                                            
                                        </div>
                                        <div class="form-group" id="confirmDiv" style="display:none" >
                                            <label for="confirm" class= "form-label">Confirm Password</label>
                                            <small class="text-danger form-text"></small>
                                            <input type="password" name="confirm" id="confirm" class="form-control" onchange="comparePasswords('newpass','confirm','ownUpdate');">
                                            
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block" id="ownUpdate" name = "ownUpdate" >Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!--end first row-->
                        </div><!--end container main-->
                    </div><!--end modal body-->
                                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger cancel" data-dismiss="modal"  onclick="javascript: if(!confirmCancel()){this.preventDefault();}">Cancel</button>
                        </div>
                            
                        </div>
                </div>
            </div>
