<?php
define ("DB_HOST", "localhost");#host
define ("DB_USER", "root");#database username
define ("DB_PASS", "");#password
define ("DB_NAME", "testing");#name of database 

    //$connect = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);#make connection
    $connect= new PDO("mysql:host=localhost;dbname=testing", "root","");
    if(!$connect){#if connectionfails
        die("could not connect to database" .$connect->connect_error());#the appended method is for displaying error -and is not secure
    }

    $query = "INSERT INTO ajax_tbl (firstname, lastname) VALUES (:first_name, :last_name)";

    for($i = 0; $i <count($_POST['hidden_first_name']); $i++){
       # if(isset($_POST['hidden_first_name'][$i])){
        $data = array(
                ':first_name' => $_POST['hidden_first_name'][$i],
                ':last_name' => $_POST['hidden_last_name'][$i]  
        );
        foreach($data as $name => $value){
            echo $name ." ". $value . "<br>";
        }
        

    // }
        $statement  = $connect->prepare($query);
       if(!$statement){
           echo "Prepare failed: (". $connect->errno.") ".$connect->error."<br>";
       }else{
           echo "prepare successful" . "<br>";
       } 
         $statement->execute($data);
        if(!$statement){
            echo "Prepare failed: (". $connect->errno.") ".$connect->error."<br>";
        }else{
            echo "execute okY" . "<br>";
            
        }
    }
    

?>