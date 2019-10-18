<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<div class="container-fluid" onmouseenter = "setTimeout('timeOnly(2,59,59);', 1000);">
<?php  require_once("includes/admin-sidebar.php"); ?>
   <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-6 content-area">
      <div class="row">
        <div class="col-sm-4 col-6">
          <h3>Monitor Exams</h3>
        </div>                  
        <div class="col-sm-6 col-6 offset-sm-2 ">
          <p id="clock" class="text-danger lead"></p>
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
      <div class="col-sm-12 col-md-6">
        <p class="text-success">There are <span><strong>5 </strong></span>Exams currently ongoing.</p>
      </div>
    </div><!--card row-->
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <p class="text-danger"><span><strong>3</strong></span> Exams just Ended</p>
      </div>
    </div>

    <div class="row">
    <div class="container-fluid">
            <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Exam Type</th>
                    <th>Name</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Exam Time</th>
                    <th>Count Down</th>
                    <th>Force Stop</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Java SE</td>
                    <td>John Doe</td>
                    <td><?php echo date("h:i:sa"); ?></td>
                    <td><?php echo date("h:i:sa"); ?></td>
                    <td>3 hours</td>
                    <td id="clock" class = "text-success"></td>
                    <td>
                    <form action="exam-edit.php" method = "POST">
                        <input type="hidden" name="uid" value = "">
                        <input type="hidden" name="uname" value = "">
                        <button type="submit" name = "stop" class = "btn btn-sm btn-success">Stop</button>
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