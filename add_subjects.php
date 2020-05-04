<?php session_start();?>
<?php require_once("includes/pdo_connect.php"); ?>
<?php require_once("includes/functions.php");?>

<?php 
    if(isset($_POST['exam_name'])) {
        $exam_name = check_input($_POST['exam_name']);
        $admin = $_SESSION['name'];
        $date =  date("Y-m-d H:i:s");

        $sql = "INSERT INTO tblexams (subjects, date_created, created_by, last_modified) VALUES (:subjects,:created,:who,:dated)";

        $data = array(
            ':subjects' => $exam_name,
            ':created' => $date,
            ':who' => $admin,
            ':dated' => $date
        );

        $statement = $connection->prepare($sql);
        $statement->execute($data);
        
    }
 ?>