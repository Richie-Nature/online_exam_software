<?php require_once("includes/pdo_connect.php"); ?>
<?php require_once("includes/functions.php");?>

<?php #EXISTING QUESTIONS FIRST READ INORDER TO ASCERTAIN WHAT QUERY TO BE PERFORMED ON QUESTION TO BE SUBMITTED EITHER UPDATE OR INSERT
$exam_id = $_GET['examID'];
    
    $readQuery = "SELECT * FROM tblquestions WHERE exam_nameID = :exam_id AND question = :question";
    
    for ($i = 0; $i < count($_POST['hidden_examId']); $i++) {
        $retrieved = array(
            ':question' => $_POST['hQuest'][$i],//:question HERE STANDS FOR QUESTION EXISTING IN DATABASE
            ':exam_id' => $_POST['hidden_examId'][$i]
        );
            $statement = $connection->prepare($readQuery);
        
       try {
            $statement->execute($retrieved);
        }catch (PDOException $e) {
            echo "Read query failed: ". $e->getMessage();
        }

        $existing_ques = $statement->rowCount();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            $ques_id = $row['id'];

                #PERFORM QUERY BASED ON EXISTENCE OF QUESTION IN DATABASE
        if($existing_ques > 0){
            $query = "UPDATE tblquestions set exam_nameID = :exam_id, question_no = :number, question = :question, option_1 = :option_1, option_2 = :option_2, 
            option_3 = :option_3, option_4 = :option_4, answer = :answer,score = :score, 
            last_modified = :date WHERE id = $ques_id";
        }else{
            $query = "INSERT INTO tblquestions (exam_nameID, question_no, question, option_1, option_2, option_3, option_4, answer, score, last_modified) 
                VALUES (:exam_id, :number, :question, :option_1, :option_2, :option_3, :option_4, :answer, :score, :date)";
                
        }
       
    $data = array(
        ':exam_id' => $_POST['hidden_examId'][$i],
        ':number' => $_POST['hidden_questionNo'][$i],
        ':question' => $_POST['hidden_question'][$i],
        ':option_1' => $_POST['hidden_option1'][$i],
        ':option_2' => $_POST['hidden_option2'][$i],
        ':option_3' => $_POST['hidden_option3'][$i],
        ':option_4' => $_POST['hidden_option4'][$i],
        ':answer' => $_POST['hidden_answer'][$i],
        ':score' => $_POST['hidden_score'][$i],
        ':date'  => $_POST['hidden_date'][$i]
    );
    

    $statement = $connection->prepare($query);
    $statement->execute($data);
    // if(!$statement){
    //     echo "Ooh..Something went wrong: (". $connection->errno.") ".$connection->error."<br>";
    // }else{
    //     echo "prepare successful" . "<br>";
    // } 
   
    }//END READ and CONDITIONAL INSERTION 'FOR'


    
     
    
        
    
   



