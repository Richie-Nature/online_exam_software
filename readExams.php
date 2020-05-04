<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>

<?php 
      $query = "SELECT * FROM tblexams WHERE visibility = 1";
      $result = $connection->query($query);
      confirm_query($result, $connection);
      $nOfExams = mysqli_num_rows($result);
      $data = array();
      while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
      }
      echo json_encode($data);
    ?>