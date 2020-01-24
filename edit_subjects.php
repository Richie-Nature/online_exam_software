<?php session_start(); ?>
<?php $admin_page = "Edit Subjects"; ?>
<?php require("includes/functions.php");?>
<?php require_once("includes/connection.php"); ?>
<?php confirm_logged_in();?>
<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<div class="container-fluid">
<?php  require_once("includes/admin-sidebar.php"); ?>
<?php require_once("includes/admin-sidepic.php");?>
   <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-6 content-area">
      <div class="row">
        <div class="col-8-4 col-12">
          <h3>Manage Exam Types and Questions</h3>
        </div>                  
    </div><!--row-->
    <div class="row">
      <div class="col-sm-8">
        <ul class="breadcrumb breadul">
          <li class="breadcrumb-item "><a href="#" class = "bread">Home</a></li>
          <li class="breadcrumb-item  "><a href="#" class = "bread">Login</a></li>
          <li class="breadcrumb-item "><a href="#" class = "bread">Dashboard</a></li>
          <li class="breadcrumb-item bread active">Data</li>
      </ul>
      </div>
    </div><!--row-->
    <div class="row">
      <!-- <div class="col-xs-5 col-md-5 es-head">
        <h5 class="text-primary">Current Exams <i class = "text-muted">Available*:</i>20</h5>
      </div> -->
      <div class="col-xs-5 col-md-12 offset-lg-2">
      <form class="form-inline" action="" method="POST">
        <label for="exam_name" class="form-label mr-sm-2">Add New Exam:</label>
        <input class="form-control mr-sm-2 mb-2" id="exam_name" type="text" placeholder="Enter Exam Name">
        <input type="number" name="no_fields" id="no_fields"  class = "form-control mr-sm-2 mb-2" placeholder = "No of Questions:" onblur = "generateFields();">
        <button class="btn btn-success mb-2" type="submit">Submit</button>
      </form>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <small class= "text-muted" >*Exams Available to you, depend on your access level</small>
      </div>
    </div>
    <div class="row">
    <div class="container-fluid">
    <?php 
      $query = "SELECT * FROM tblexams WHERE visibility = 1";
      $result = $connection->query($query);
      confirm_query($result, $connection);
      $nOfExams = mysqli_num_rows($result);
    ?>
    <table id="mytable" class="table table-striped table-bordered table-dark table-responsive-sm table-responsive-md table-responsive-lg ">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Exam Type</th>
                    <th>Date Created</th>
                    <th>Created By</th>
                    <th>Last Modified</th>
                    <th>**</th>
                    <th>**</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['subjects']; ?></td>
                    <td><?php echo $row['date_created']; ?></td>
                    <td><?php echo $row['created_by']; ?></td>
                    <td><?php echo $row['last_modified'];?></td>
                    
                    <td>
                    <form action="exam-edit.php" method = "POST">
                        <input type="hidden" name="examId" value = "<?php echo $row['id']; ?>">
                        <input type="hidden" name="examName" value = "<?php echo $row['subjects']; ?>">
                        <button type="submit" name = "edit" class = "btn btn-sm btn-success">Edit</button>
                    </form>
                    </td>
                    <td>
                    <form action="" method="POST">
                        <input type="hidden" name="sid" value = "">
                        <input type="hidden" name="subject" value = "">
                        <button type="submit" name = "delete" class = "btn btn-sm btn-success">Delete</button>
                    </form>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
</div>
</div>
    </div>
   </div><!--colsm8major-->
    
</div><!--rowmajor-->
</div>


<?php require_once("includes/admin-footer.php"); ?>