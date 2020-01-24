<?php session_start(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in();?>
<!DOCTYPE html>
<html lang="en">
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

    <div class="container">
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
            <a href="" class="btn btn-sm btn-primary card-text">lorem</a>
          </div>
        </div>
      </div>
    </div>
        <table id="mytable" class="table table-striped table-bordered table-dark" >
                <thead>
                    <tr>
                        <th>S/n</th>
                        <th>Name</th>
                        <th>Score</th>
                        <th>Failed</th>
                        <th>No of Questions</th>
                        <th>Attempted</th>
                        <th>Time consumed</th>
                        <th>Date Taken</th>
                        <th>Certified</th>
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
                        <td>Yes</td>
    
                    </tr>
                    <tr>
                <td>2</td>
                <td>Precious Vite</td>
                <td>13</td>
                <td>6</td>
                <td>17</td>
                <td>5</td>
                <td> 1hr: 23m: 3s </td>
                <td><?php echo date(" Y-m-d h:i:sa"); ?></td>
                <td>No</td>
                
              </tr>
              <tr>
                <td>3</td>
                <td>Max doe</td>
                <td>25</td>
                <td>5</td>
                <td>19</td>
                <td>14</td>
                <td> 1hr: 23m: 3s </td>
                <td><?php echo date(" Y-m-d h:i:sa"); ?></td>
                <td>Yes</td>
                
              </tr>
              <tr>
                <td>4</td>
                <td>Jehu Nwosu</td>
                <td>30</td>
                <td>0</td>
                <td>16</td>
                <td>13</td>
                <td> 1hr: 23m: 3s </td>
                <td><?php echo date(" Y-m-d h:i:sa"); ?></td>
                <td>No</td>
                
              </tr>
              <tr>
                <td>5</td>
                <td>Trust Anoure</td>
                <td>23</td>
                <td>7</td>
                <td>15</td>
                <td>13</td>
                <td> 1hr: 23m: 3s </td>
                <td><?php echo date(" Y-m-d h:i:sa"); ?></td>
                <td>Yes</td>
                
              </tr>
              <tr>
                <td>6</td>
                <td>Michael Michael</td>
                <td>25</td>
                <td>5</td>
                <td>15</td>
                <td>13</td>
                <td> 1hr: 23m: 3s </td>
                <td><?php echo date(" Y-m-d h:i:sa"); ?></td>
                <td>Yes</td>
                
              </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>S/n</th>
                        <th>Name</th>
                        <th>Score</th>
                        <th>Failed</th>
                        <th>No of Questions</th>
                        <th>Attempted</th>
                        <th>Time consumed</th>
                        <th>Date Taken</th>
                        <th>Certified</th>
                    </tr>
                </tfoot>
            </table>
            
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
