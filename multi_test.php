<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Sending multiple forms data through jquery Ajax</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</head>
<body>
    <div class="container">
        <br>
        <h3 class = "text-center">PHP - Sending multiple forms data through jquery Ajax</h3><br>
        <br>
        <br>
        <div class="text-center mb-4">
            <button class="btn btn-success btn-xs" id="add" name = "add">Add</button>
        </div>
        <form action="" method="post" id="user_form">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="user_data">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Details</th>
                        <th>Remove</th>
                    </tr>
                </table>
            </div>
            <div class="text-center">
                <input type="submit" value="Insert" class="btn btn-primary" id="insert" name = "insert">
            </div>
        </form>
    </div>
    <div id="user_dialog" title="Add Data">
        <div class="form-group">
            <label for="first_name">Enter First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
            <span id="error_first_name" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label for="last_name">Enter Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control">
            <span id="error_last_name" class="text-danger"></span>
        </div>
        <div class="form-group text-center">
            <input type="hidden" name="row_id" value="hidden_row_id">
            <button id="save" class="btn btn-info" name = "save">Save</button>
        </div>
    </div>
    <div id="action_alert" title="Action">
    
    </div>

    <script>
    $(document).ready(function(){
        let count = 0;
        $('#user_dialog').dialog({
            autoOpen:false,
            width:400
        });

        $('#add').click(function(){
            $('#user_dialog').dialog('option','title','Add Data');
            $('#first_name').val('');
            $('#last_name').val('');
            $('#error_first_name').text('');
            $('#error_last_name').text('');
            $('#first_name').css('border-color', '');
            $('#last_name').css('border-color', '');
            $('#save').text('Save');
            $('#user_dialog').dialog('open');
        });
 
        $('#save').click(function(){
            let error_first_name = '';
            let error_last_name = '';
            let first_name = '';
            let last_name = '';
            if($('#first_name').val() == ''){
                error_first_name = 'First Name is required';
                $('#error_first_name').text(error_first_name);
                $('#first_name').css('border-color', '#cc0000');
                first_name = '';
            }else{
                error_first_name = '';
                $('#error_first_name').text(error_first_name);
                $('#first_name').css('border-color', '');
                first_name = $('#first_name').val();
            }
            if($('#last_name').val() == ''){
                error_last_name = 'Last Name is required';
                $('#error_last_name').text(error_last_name);
                $('#last_name').css('border-color', '#cc0000');
                last_name = '';
            }else{
                error_last_name = '';
                $('#error_last_name').text(error_last_name);
                $('#last_name').css('border-color', '');
                last_name = $('#last_name').val();
            }
            if(error_first_name != '' || error_last_name != ''){
                return false;
            }else{
                if($('#save').text() == 'Save'){
                    count = count +1;
                    
                    output = '<tr id="row_'+count+'">';
                    output += '<td>'+first_name+'<input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value ="'+first_name+'"></td>';
                                

                    output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" class="last_name" value ="'+last_name+'"></td>';
                                

                    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+
                                count+'">View</button></td>';
                    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+
                                count+'">Remove</button></td>';
                    output += '</tr>';
                    $('#user_data').append(output);
                }
                else{ 
                        let row_id = $('#hidden_row_id').val();
                        output += '<td>'+first_name+'<input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value ="'+first_name+'"></td>';
                        output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" class="last_name" value ="'+last_name+'"></td>';
                        output += '<td><button type="button"  name="view_details" class="btn btn-warning btn-xs view_details" id="'+
                                    row_id+'">View</button></td>';
                        output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+
                                    row_id+'">Remove</button></td>';
                        $('#row_'+row_id+'').html(output);
                        
                }
                $('#user_dialog').dialog('close');
            }
            
        });

        $(document).on('click', '.view_details', function(){
            let row_id = $(this).attr("id");
            let first_name = $('#first_name'+row_id+'').val();
            let last_name = $('#last_name'+row_id+'').val();
            $('#first_name').val(first_name);
            $('#last_name').val(last_name);
            $('#save').text('Edit');
            $('#hidden_row_id').val(row_id);
            $('#user_dialog').dialog('option', 'title', 'Edit Data');
            $('#user_dialog').dialog('open');
        });

        $(document).on('click', '.remove_details', function(){
            var row_id = $(this).attr("id");
            if(confirm("Are you sure you want to remove this row data?")){
                $('#row_'+row_id+'').remove();
            }else{
                return false;
            }
        });

        $('#action_alert').dialog({
            autoOpen:false
        });
        $('#user_form').on('submit', function(event){
            event.preventDefault();
            var count_data = 0;
            $('.first_name').each(function(){
                count_data = count_data + 1;
            });
            if(count_data > 0){
                var form_data = $(this).serialize();
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data:form_data,
                    success:function(data, textStatus, jqXHR){
                        $('#user_data').find("tr:gt(0)").remove();
                        // $('#action_alert').html(data);
                        console.log(data);
                        $('#action_alert').html('<p>Data Inserted Successfully</p>');
                        $('#action_alert').dialog('open');
                    },
                    error:function(jqXHR, textStatus, errorThrown){
                        $('#action_alert').html(errorThrown);
                        $('#action_alert').dialog('open');
                    }
                })
            }else{
                $('#action_alert').html('<p>Please Add at least one data</p>');
                $('#action_alert').dialog('open');
            }
        })
    });
</script>
</body>
</html>
