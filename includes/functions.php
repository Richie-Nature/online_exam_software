<?php
    function logged_in() {
        return isset($_SESSION['user_id']);
    }
    function confirm_logged_in() {
        if(!logged_in()) {
            redirect_to("admin.php");
        }
    }
    function redirect_to($location = NULL) {
        if($location != NULL) 
            header("Location: {$location}");
            exit;
    }
    function confirm_query($result_set,$connection) {
        if(!$result_set) {
            die("database query failed: " . mysqli_error($connection));
        }
    }
    function check_input($data) {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }

   function re_order($table) {
       /*re-order id number*/
       $sql = "SET @num := 0;";
       $sql .= "UPDATE `$table` SET id = @num := (@num +1);";
       $sql .= "ALTER TABLE `$table` AUTO_INCREMENT =1;";
       return $sql;
   }
   function count_all_rows($table,$connection,$field_name,$sec_id) {
       #TO GET TOTAL COUNT OF ROWS
       $sql = "SELECT COUNT(id) FROM $table WHERE $field_name = $sec_id";
       $query = $connection->query($sql);
       confirm_query($query,$connection);
       $row = mysqli_fetch_row($query);
       
       #TOTAL ROW COUNT
       return $total_rows = $row[0];#QUERY RETURNS 2 RESULTS WHERE 1st RESULT IS THE MAIN
   }
   function get_results_per_page($rpp){
      return $rpp;#RESULTS PER PAGE
   }
   function get_lastPage($total_rows,$results_per_page) {
    $last_page = ceil($total_rows/$results_per_page);#TO GET PAGE NUMBER OF LAST PAGE

    #ENSURES LAST PAGE CANNOT BE LESS THAN ONE
    if($last_page < 1){
        $last_page = 1;
    }
    return $last_page;
   }
   function offset_($rpp,$current_page) {
      return $offset = $rpp * ($current_page - 1);
   }
   function delete($table,$field,$id,$connection) {
       $sql = "DELETE FROM $table WHERE $field = $id";
       $update = $connection->query($sql);
       return $update;
   }