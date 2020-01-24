<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>

<!--DELETE HANDLER GOES HERE-->
<?php 
if(isset($_GET['id'])) {
    $id = check_input($_GET['id']);

    $query = " DELETE FROM student_users WHERE id = $id";
    $update = $connection->query($query);
    if($update){ echo "<script>
                     alert('Records Updated');
                     window.location = 'edit_student.php';
                     </script>";
      }              
    } elseif(isset($_GET['question_id'])) {
      $id = check_input($_GET['question_id']);
      
      $query = "DELETE FROM tblquestions WHERE id = $id";
      $update = $connection->query($query);
      if($update){
        $order_query = re_order('tblquestions');
        $re_order = $connection->query($order_query);
      }
    }

?>