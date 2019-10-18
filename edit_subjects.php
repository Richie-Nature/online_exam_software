<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<div class="container-fluid">
<?php  require_once("includes/admin-sidebar.php"); ?>
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
      <div class="col-sm-5 col-md-5 es-head">
        <h5 class="text-primary">Current Exams <i class = "text-muted">Available*:</i>20</h5>
      </div>
      <div class="col-sm-5 col-md-5">
      <form class="form-inline" action="">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
      </div>
      <div class="col-sm-1 col-md-1">
        <a href="add_subjects.php" class="btn btn-danger">Add New</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <small class= "text-muted" >*Exams Available to you, depend on your access level</small>
      </div>
    </div>
    <div class="row">
    <div class="container-fluid">
            <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Exam Type</th>
                    <th>Date Created</th>
                    <th>Created By</th>
                    <th>Last Modified</th>
                    <th rowspan = "2" >Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Java SE</td>
                    <td><?php echo date('Y-m-d');?></td>
                    <td>Oracle inc.</td>
                    <td><?php echo date('Y-m-d');?></td>
                    
                    <td>
                    <form action="exam-edit.php" method = "POST">
                        <input type="hidden" name="sid" value = "">
                        <input type="hidden" name="subject" value = "">
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
            </tbody>
        </table>
</div>
</div>
    </div>
   </div><!--colsm8major-->
    
</div><!--rowmajor-->
</div>


<?php require_once("includes/admin-footer.php"); ?>