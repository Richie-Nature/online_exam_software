<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>

<!--DELETE HANDLER GOES HERE-->
<?php 
if(isset($_GET['id'])) {
    $id = check_input($_GET['id']);

    if(delete('student_users','id',$id,$connection)) { 
     echo "<script>
          alert('Records Updated');
          window.location = 'edit_student.php';
          </script>";
      }              
    } elseif(isset($_GET['question_id'])) {
      $id = check_input($_GET['question_id']);
      
      if(delete('tblquestions','id',$id,$connection)) { 
        $order_query = re_order('tblquestions');
        $re_order = $connection->multi_query($order_query);
      }
    } elseif(isset($_POST['sid'])) {
      $xid = $_POST['sid'];
      if(delete('tblexams','id',$xid,$connection)) {
        if(delete('tblquestions','exam_nameID',$xid,$connection)){
          $order_query = re_order('tblquestions');
          $order_query .= re_order('tblexams');
          $re_order = $connection->multi_query($order_query);
        }else{echo "Exams not deleted: ".mysqli_error(delete('tblexams','id',$xid,$connection));}
      }
    }

?>