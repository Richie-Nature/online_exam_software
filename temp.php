<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/admin-header.php");?>
<div class="container-fluid content-area">
    <div class="row">
      <div class="col-xs-12 col-sm-8 mt-4 mb-4">
      <h5 class="">Exam Name: <span id="exam-name"></span></h5>
      </div>
    </div>
    <div class="row mb-4" id = "no-user" >
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2">
        <div class="card bg-warning">
          <div class="card-body text-center">
            <h6 class="card-title text-light">Number taken this exam: <span class = "text-dark" ><strong>3</strong></span></h6>
            <hr class="my-4">
            <a href="" class="btn btn-sm btn-primary card-text">View Takers Info</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container"  id = "">
      <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
        <table id = "mytable" class="table table-striped table-dark table-bordered">
          <thead>
            <tr>
              <td>S/n</td>
              <td>Name</td>
              <td>Score</td>
              <td>Failed</td>
              <td>No of Questions</td>
              <td>Attempted</td>
              <td>Time consumed</td>
              <td>Date Taken</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>1</td>
                <td>John doe</td>
                <td>25</td>
                <td>5</td>
                <td>15</td>
                <td>13</td>
                <td> 1hr: 23m: 3s </td>
                <td><?php echo date(" Y-m-d h:i:sa"); ?></td>
                <td> <a href="" class="btn btn-sm btn-success">Give Result</a> </td>
                
              </tr>
              
          </tbody>
        </table>
      </div>
    </div>
</div>
