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
      <form class="form-inline" action="add_subjects.php" method="POST" id="new_exam">
        <label for="exam_name" class="form-label mr-sm-2">Add New Exam:</label>
        <input class="form-control mr-sm-2 mb-2" id="exam_name" type="text" placeholder="Enter Exam Name" name="exam_name">
        <button class="btn btn-success mb-2" type="submit">Submit</button>
      </form>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <small class= "text-muted" >*Exams Available to you, depend on your access level</small>
      </div>
    </div>
    <div class="container">
      <div class="alert alert-success alert-dismissible" id="alert-box" style="display:none;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p id="alert"></p>
      </div>
    </div>
    <div class="row">
    <div class="container-fluid">
    
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
            </tbody>
        </table>
</div>
</div>
    </div>
   </div><!--colsm8major-->
    
</div><!--rowmajor-->
</div>

<script src="js/admin.js"></script>
<!--ADD NEW EXAM -->
<script>
  $(document).on('submit','#new_exam',function(e){
    e.preventDefault();
    const form_data = $(this).serialize();
    $.ajax({
      url: 'add_subjects.php',
      method: 'POST',
      data:form_data,
      success:function(data){
        getExams();
      },
      error:function(errorThrown){
            $('#alert-box').toggleClass("alert-success alert-danger");
            $('#alert').text("Failed to add Exam.Please try again");
            $('#alert-box').show();
      }
    })
  })
</script>
<script>
  $(document).on('submit','#del_form',function(event){
    event.preventDefault();
    if(confirm("Are you sure you want to delete this exam?\nThis action cannot be undone!")) {
      const form_data = $(this).serialize();
        $.ajax({
          url: 'delete.php',
          method: 'POST',
          data:form_data,
          success:function(data){
            $('#alert').text("Exam Removed Successfully");
            $('#alert-box').show();
            getExams();
          },
          error:function(jqXHR, textStatus, errorThrown){
                   $('#alert-box').toggleClass("alert-success alert-danger");
                   $('#alert').text("An Error has occured! Please try again");
                   $('#alert-box').show();
              }
        });
     }else{
      event.preventDefault();
     }
  });
</script>

<!--READ EXAMS FROM DATABASE USING AJAX-->
<script>
  $(document).ready(getExams = function(){
    $.ajax({
      url:'readExams.php',
      success:function(result){
        const data = JSON.parse(result);
        const no_result = data.length;
        
        if($.fn.DataTable.isDataTable('#mytable')){//if table is initialized
          $('#mytable').DataTable().destroy();//destroy existing table
        }
        $("#mytable tbody").empty();//Empty table

        for(let i=0; i<data.length; i++) {
          let id = data[i].id,
              subjects = data[i].subjects,
              date_created = data[i].date_created,
              created_by = data[i].created_by,
              last_modified = data[i].last_modified;

          let output = '<tr>';
              output +=`<td>${id}</td>`;
              output += `<td>${subjects}</td>`;
              output += `<td>${date_created}</td>`;
              output +=  `<td>${created_by}</td>`;
              output += `<td>${last_modified}</td>`;
              output += `<td>
                            <form action="exam-edit.php" method = "POST">
                              <input type="hidden" name="examId" value = "${id}">
                              <input type="hidden" name="examName" value = "${subjects}">
                              <input type="hidden" name="modified" value = "${last_modified}">
                              <button type="submit" name = "edit" class = "btn btn-sm btn-success">Edit</button>
                            </form>
                        </td>`;
              output +=  `<td>
                              <form id="del_form">
                                    <input type="hidden" name="sid" value = "${id}">
                                    <input type="hidden" name="subject" value = "${subjects}">
                                    <button type="submit" name = "delete" class = "btn btn-sm btn-success" id="del">Delete</button>
                                </form>
                          </td>`;
              output +=  '</tr>';
              $('#mytable').find('tbody').append(output);
              
        }
        //re-initialize databales
        $('#mytable').dataTable({
          "autoWidth":false, 
          "info":true, 
          "JQueryUI":true, 
          "ordering":true, 
          "paging":true, 
          "scrollY":"500px", 
          "scrollCollapse":true
});
      },
      error:function(errorThrown) {
            $('#alert-box').toggleClass("alert-success alert-danger");
            $('#alert').text("An Error has occured! Please refresh!");
            $('#alert-box').show();
      }
    })
  })
</script>

<?php require_once("includes/admin-footer.php"); ?>