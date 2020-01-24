<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php 
if(isset($_POST['pn'])) { 
    $exam_id = $_GET['examID'];
     $result_per_page = preg_replace('#[^0-9]#', '',$_POST['rpp']);
     $last_page = preg_replace('#[^0-9]#', '',$_POST['last']);
     $page_number = preg_replace('#[^0-9]#', '',$_POST['pn']);
     
    #This makes sure the page number isn't below 1, or more than our $last page
    if($page_number < 1 || $page_number = 'undefined') {
        $page_number = 1;
    }else if($page_number > $last_page) {
        $page_number = $last_page;
    }

    #This sets the range of rows to query for the chosen page number
    #OFFSET-Records to skip before returning records
    $offset= offset_($result_per_page,$page_number);
    $query = "SELECT * FROM tblquestions WHERE exam_nameID = $exam_id 
    LIMIT $result_per_page OFFSET $offset";
    $result = $connection->query($query);
    confirm_query($result,$connection);
    $data = array();
    //$no_of_questions = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    //echo json_encode($data); #parse array into json format
    mysqli_close($connection);
    exit();
}