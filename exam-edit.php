<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/admin-header.php");?>
<?php 
    if(isset($_POST['examName'])){
        $examName = $_POST['examName'];
        $examId = $_POST['examId'];
    }else{
        redirect_to('edit_subjects.php');
    }
?>
<?php $total_rows = count_all_rows('tblquestions',$connection,'exam_nameID',$examId);
      $rpp = get_results_per_page(2);
      $last_page = get_lastPage($total_rows,$rpp);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-sm-4 back-btn-div">
            <a href="edit_subjects.php" class="btn btn-sm btn-danger back-btn"><i class="fas fa-arrow-left"></i><span>Back</span></a>
        </div>
    </div>

<div class="row">
    <div class="container">
    <div class="col-sm-8">
        
        
        <div class="row">
                <div class="col-xs-12 col-lg-6">
                 <div class="form-group">
                            <label for="sname" class = "" >Exam Name:</label>
                            <input type="text" class="form-control inputs  " id="sname" name="sname" placeholder ="Exam" 
                            value= "<?php echo $examName; ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                <form class="form-inline" action="" method="">
                    <label for="exam_name" class="form-label mr-sm-2">Add New Questions:</label>
                    <input  id="exam_name" type="hidden">
                    <input type="number" name="no_fields" id="no_fields"  class = "form-control mr-sm-2 mb-2" placeholder = "No of Questions:" >
                    <button class="btn btn-primary mb-2" type="button" onclick = "generateFields();">Submit</button>
                </form>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-6 col-md-6 ">
                    <h5 class = ""><u>Edit Questions</u></h5>
                    <small class=""> <span id = "existing"><strong><?php echo $total_rows?></strong></span> questions set</small>
                    
                </div>
                
            </div>
            
            <div class="row">
                <div class="sticky col-2 ml-0">
                    <form action="" id="main_form" method="post">
                      <table style = "display:none;" id = "quest_data"> 
                         <tr>
                            <th>Exam ID</th>
                            <th>Question Number</th>
                            <th>Question</th>
                            <th>Original</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>Correct Answer</th>
                            <th>Score</th>
                            <th>Modified</th>
                         </tr>
                      </table>
                        <input type="submit" value="Submit Question(s)" class="btn btn-primary btn-block" id="insert" name = "insert">
                        
                    </form>
                    <!--TABLE TO LOOP EXISTING QUESTIONS INTO-->
                    <table style = "display:none;" id = "looped_ques">
                        <tr>
                            <th>Question Number</th>
                            <th>Question</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>Correct Answer</th>
                            <th>Score</th>
                        </tr>
                    </table>
                </div>
            </div>
            <div id = "exam-div">

            </div>
            <div id="action_alert" title = "Action">

            </div>
            <!-- <div class="row"> -->
                <!-- <div class="col-xs-12 col-md-6"> -->
                    <ul class="pagination justify-content-end" style="margin:20px 0">
                        <li class="page-item" id="prev"><button class="page-link">Previous</button></li>
                        <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                        <li class="page-item" id="next"><button class="page-link">Next</button></li>
                    </ul>
                <!-- </div> -->
            <!-- </div> -->

        </div>
    </div>
</div>
</div>

<script src="js/admin.js"></script>

<!--SCRIPT TO HANDLE MULTIPLE DYNAMIC INSERT AND UPDATE QUERIES (submitQues.php) -->
<script>
       $(document).on('click', '.save', function(){
           const ques_no = $(this).attr("id");
            // alert('Im working... on question '+ques_no);
            let question = $('#question'+ques_no).val();
            let hQuestion = $('#hiddenQuest'+ques_no).val();
            let option1 = $('#option1'+ques_no).val();
            let option2 = $('#option2'+ques_no).val();
            let option3 = $('#option3'+ques_no).val();
            let option4 = $('#option4'+ques_no).val();
            let answer = $(`input[name='answer${ques_no}']:checked`).val();
            let score = $('#score'+ques_no).val();
            let exam_id = "<?php if(isset($_POST['examId'])){echo $_POST['examId'];} ?>";
            let date_value = "<?php echo date("Y-m-d H:i:s");?>";

            //VALIDATE QUESTION FORM
            
            
            output = '<tr id="row_'+ques_no+'">';
            output += '<td>'+'<input type="hidden" name="hidden_examId[]" class="examId" value="'+exam_id+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_questionNo[]" id="No'+ques_no+'" class="quesNo" value="'+ques_no+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_question[]" id="question_'+ques_no+'" class="question" value="'+question+'"></td>';
            output += '<td>'+'<input type="hidden" name="hQuest[]" id="hQuest_'+ques_no+'" class="hiddenQuest" value="'+hQuestion+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_option1[]" id="option1_'+ques_no+'" class="option" value="'+option1+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_option2[]" id="option2_'+ques_no+'" class="option" value="'+option2+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_option3[]" id="option3_'+ques_no+'" class="option" value="'+option3+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_option4[]" id="option4_'+ques_no+'" class="option" value="'+option4+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_answer[]" id="answer'+ques_no+'" class="answer" value="'+answer+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_score[]" id="score_'+ques_no+'" class="score" value="'+score+'"></td>';
            output += '<td>'+'<input type="hidden" name="hidden_date[]" id="date'+ques_no+'" class="date" value="'+date_value+'"></td>';
            output += '</tr>';
            $('#quest_data').append(output);

            $(this).toggleClass("btn-primary btn-success save");
            $(this).text("Saved!");

       });
       $('#action_alert').dialog({
           autoOpen: false
       });
       $('#main_form').on('submit', function(event){
           event.preventDefault();
           let count_data = 0;
           const exam_id = "<?php if(isset($_POST['examId'])){echo $_POST['examId'];} ?>";
           const modified_date = "<?php echo date("Y-m-d H:i:s");?>";
           $('.quesNo').each(function(){
               count_data += 1;
           });
           if(count_data > 0){
               const form_data = $(this).serialize();
               $.ajax({
                    url: `submitQues.php?id=${exam_id}&m=${modified_date}`, 
                    method: "POST",
                    data:form_data,
                    success:function(data, textStatus, jqXHR){
                        $('#quest_data').find("tr:gt(0)").remove();
                        $('#insert').toggleClass("btn-primary btn-success");
                        $('#insert').val("Submitted!");
                        $('#action_alert').html('<p>Submitted Successfully</p>');
                        //$('#action_alert').html(data);
                        $('#action_alert').dialog('open');
                        setTimeout(function(){
                            location.reload();
                        }, 1000)
                    },
                    error:function(jqXHR, textStatus, errorThrown){
                        $('#action_alert').html(errorThrown);
                        $('#action_alert').dialog('open');
                    }
               });
           }//end if
           else{
               $('#action_alert').html('<p>No Question Saved</p>');
               $('#action_alert').dialog('open');
           }
       })
       $(document).ready(function(){
           $(document).on('click','.delete', function(event){
                event.preventDefault();
               const number = $(this).attr('id');
               const id = $('#delForm'+number).find('.ids');
               if(!confirmDelete()) {
                   const form_data = $(this).serialize();
                   $.ajax({
                       url: "delete.php?question_id="+id.val(),
                       method: "POST",
                       data: form_data,
                       success:function(data){
                        // $('#action_alert').html(data);//"<p>Question Successfully Removed<p>"
                        // $('#action_alert').dialog('open');
                        setTimeout(function(){
                                location.reload();
                            }, 1000)
                       },
                       error:function(jqXHR, textStatus, errorThrown){
                            $('#action_alert').html(errorThrown);
                            $('#action_alert').dialog('open');
                        }
                   })
               }

           })
            
       })
       
</script>

<!--SCRIPT TO SEND PARAMETERS TO PHP FOR PAGINATION-->
<!--SCRIPT TO HANDLE DISPLAYING RECORDS READ FROM DATABASE(retrieveQues.php) -->
<script> 
    const rpp = <?php echo $rpp;?>;
    const last_page = <?php echo $last_page;?>;
    const previous = $('#prev');
    const next = $('#next');
    let pageNumber;
    $(document).ready(request_page = function(){
        const exam_id = "<?php if(isset($_POST['examId'])){echo $_POST['examId'];}?>";
        $.ajax({
            url: `retreiveQues.php?id=${exam_id}`,
            success: function(result) {
               var data = JSON.parse(result);
               const no_result = data.length;

               $('#no_fields').val(no_result);
               generateFields();
               $('#no_fields').val("");

                //loop through data
                for (i = 0; i<data.length; i++){
                    let question = data[i].question,
                        option1 = data[i].option_1,
                        option2 = data[i].option_2,
                        option3 = data[i].option_3,
                        option4 = data[i].option_4,
                        answer = data[i].answer,
                        score = data[i].score,
                        number = data[i].question_no,
                        quest_id = data[i].id;

                        output = '<tr id="row_'+number+'" class="looped_record">';
                        output += '<td>'+'<input type="text" name="ids[]" id="id_'+number+'" class="id" value="'+quest_id+'"></td>';
                        output += '<td>'+'<input type="text" name="number[]" id="No'+number+'" class="number" value="'+number+'"></td>';
                        output += '<td>'+'<input type="text" name="question[]" id="question_'+number+'" class="question" value="'+question+'"></td>';
                        output += '<td>'+'<input type="text" name="option1[]" id="option1_'+number+'" class="option1" value="'+option1+'"></td>';
                        output += '<td>'+'<input type="text" name="option2[]" id="option2_'+number+'" class="option2" value="'+option2+'"></td>';
                        output += '<td>'+'<input type="text" name="option3[]" id="option3_'+number+'" class="option3" value="'+option3+'"></td>';
                        output += '<td>'+'<input type="text" name="option4[]" id="option4_'+number+'" class="option4" value="'+option4+'"></td>';
                        output += '<td>'+'<input type="text" name="answer[]" id="answer'+number+'" class="answer" value="'+answer+'"></td>';
                        output += '<td>'+'<input type="text" name="score[]" id="score_'+number+'" class="score" value="'+score+'"></td>';
                        output += '</tr>'; 
                        
                        $('#looped_ques').append(output);
                }


                    $('.looped_record').each(function(){
                         const thisQuestion = $(this);
                        const question = thisQuestion.find('.question').val(),
                                option1 = thisQuestion.find('.option1').val(),
                                option2 = thisQuestion.find('.option2').val(),
                                option3 = thisQuestion.find('.option3').val(),
                                option4 = thisQuestion.find('.option4').val(),
                                answer = thisQuestion.find('.answer').val(),
                                score = thisQuestion.find('.score').val(),
                                number = thisQuestion.find('.number').val();
                                id = thisQuestion.find('.id').val();
                        
                        $('.exam-form-div').each(function(){
                        const current = $(this);
                        let textbox = current.find('textarea'),
                            hidden = current.find('.hiddenQuest'),
                            quest_num = current.find('.ques_num').text(),
                            st_option = current.find('.option1'),
                            sec_option = current.find('.option2'),
                            thd_option = current.find('.option3'),
                            fth_option = current.find('.option4'),
                            st_radio = current.find('.answer1'),
                            sec_radio = current.find('.answer2'),
                            thd_radio = current.find('.answer3'),
                            fth_radio = current.find('.answer4'),
                            score_input = current.find('input[name=score]'),
                            hidden_id = current.find('.ids');

                        if(number != quest_num) {  //Compare if number looped from database equal number of question exam div
                            return; //equivalent to javascript continue;
                        }
                        

                        textbox.val(question);
                        hidden.val(question);//Also store original question in hidden field, inorder to check existence in database...
                        st_option.val(option1);
                        sec_option.val(option2);
                        thd_option.val(option3);
                        fth_option.val(option4);
                        score_input.val(score);
                        hidden_id.val(id);
                        if(st_radio.val() == answer) {
                            st_radio.attr('checked',true);
                        }else if(sec_radio.val() == answer){
                            sec_radio.attr('checked',true);
                        }else if(thd_radio.val() == answer) {
                            thd_radio.attr('checked',true);
                        }else {
                            fth_radio.attr('checked',true);
                        }

                     });
                 });

          
            } 
        });
    });
     //Only if there is more than 1 page worth of results give the user pagination controls
                
</script>

<?php require_once("includes/admin-footer.php"); ?>