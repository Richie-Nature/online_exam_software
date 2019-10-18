<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/admin-header.php");?>

<div class="container-fluid exam-form-bg bg-dark">
    <div class="row">
        <div class="col-6 col-sm-4 back-btn-div">
            <a href="edit_subjects.php" class="btn btn-sm btn-danger back-btn"><i class="fas fa-arrow-left"></i><span>Back</span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 offset-md-8">
            <div class="container">
                   <a href=""><img class="card-img-top rounded-circle" src="img/profileicon1.png" alt="Card image"></a> 
            </div>
        </div>
</div>
<div class="row">
    <div class="container">
    <div class="col-sm-8">
        <div class="exam-form">
        <form action="" method="POST">
            <div class="row">
                <div class="col-12 col-md-6">
                 <div class="form-group">
                            <label for="sname" class = "text-light" >Exam Name:</label>
                            <input type="text" class="form-control inputs border-success text-light" id="sname" name="sname"  value="" placeholder ="Enter Exam Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-6 mb-4">
                    <h5 class = "text-light"><u>Questions</u></h5>
                    <small class="text-light"> <span><strong>2</strong></span> questions currently available</small>
                    
                </div>
            </div>
            <hr class="my-2" >
            <small class="text-info mb-2">Use radio to indicate right answer</small>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-0.5">
                                <span class = "text-light">1.</span>
                            </div>
                            <div class="col-sm-4">
                                <textarea name="question<?php ?>" id="" cols="30" rows="5"  class = "form-control inputs border-success text-light" placeholder ="Enter Question"></textarea>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-1">
                                        <span class="text-light">a.</span>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control inputs border-danger text-light" placeholder ="Answer ...">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1">
                                        <span class="text-light">b.</span>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control inputs border-danger text-light" placeholder ="Answer ...">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1">
                                        <span class="text-light">c.</span>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control inputs border-danger text-light" placeholder ="Answer ...">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1">
                                        <span class="text-light">d.</span>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control inputs border-danger text-light" placeholder ="Answer ...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1 ">
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" name="answer" class="" value = "" checked id = "ans">
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" name="answer" class="" value = "">
                                    </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" name="answer" class="" value = "">
                                    </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" name="answer" class="" value = "">
                                    </div>
                                    </div>
                                </div>
                            </div><!--formcontrol-->
                        </div><!--col-->
                    </div><!--onequestionsrow-->
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="number" name="score" id="" class="form-control inputs border-primary text-light" max = "10" min = "1" placeholder ="Score">
                        </div>
                        <div class="col-sm-4">
                            <a href="" class="btn btn-warning">Delete Question</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="" class="btn btn-danger" name = "submit" >Save</a>
                        </div>
                    </div>
                    <hr class="my-2">
        </form>
        

        </div>
    </div>
</div>
</div>

<?php require_once("includes/admin-footer.php"); ?>