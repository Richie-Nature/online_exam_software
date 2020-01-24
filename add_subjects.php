<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/admin-header.php");?>

<div class="container-fluid ">
    <div class="row">
        <div class="col-6 col-sm-4 back-btn-div">
            <a href="edit_subjects.php" class="btn btn-sm btn-danger back-btn"><i class="fas fa-arrow-left"></i><span>Back</span></a>
        </div>
    </div>

<div class="row">
    <div class="container">
    <div class="col-sm-8">
        <div>
        <form action="" method="POST">
        <div class="row">
                <div class="col-12 col-lg-6">
                 <div class="form-group">
                            <label for="sname" class = "" >Exam Name:</label>
                            <input type="text" class="form-control inputs  " id="sname" name="sname"  value="" placeholder ="Enter Exam Name">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-6 col-md-6 ">
                    <h5 class = ""><u>Create Questions</u></h5>
                    <small class=""> <span><strong>2</strong></span> questions set</small>
                    
                </div>
            </div>
            <hr class="my-2" >
            <small class="text-info mb-2">Use radio to indicate right answer</small>
            <div class="form-group">
            <div class="row">
                                    
                    <div class="col-sm-1">
                        <span>1.</span>
                    </div>
                    <div class="col-sm-11">
                            <textarea name="question<?php ?>" id="" cols="30" rows="5"  class = "form-control inputs mb-2" placeholder ="Enter Question"></textarea>
                        </div>
                    </div>
            </div><!--row 1 after use radio-->
            <div class="form-group">
            <div class="row">
                
                    <div class="col-1">
                        <span>a.</span>
                    </div>
                    <div class="col-11 col-lg-5 mb-2">
                        <input type="text" name="" id="" class="form-control inputs  " placeholder ="Answer ...">
                    </div>
                    <div class="col-1">
                        <span>b.</span>
                    </div>
                    <div class="col-11 col-lg-5 mb-2">
                        <input type="text" name="" id="" class="form-control inputs  " placeholder ="Answer ...">
                    </div>
                </div>
            </div><!--row 2-->
            <div class="form-group">
            <div class="row">
                
                    <div class="col-1">
                        <span>c.</span>
                    </div>
                    <div class="col-11 col-lg-5 mb-2">
                        <input type="text" name="" id="" class="form-control inputs  " placeholder ="Answer ...">
                    </div>
                    <div class="col-1">
                        <span>d.</span>
                    </div>
                    <div class="col-11 col-lg-5 mb-2">
                        <input type="text" name="" id="" class="form-control inputs  " placeholder ="Answer ...">
                    </div>
                </div>
            </div><!--row 3-->
            <div class="row">
                        <div class="col-sm-6 mb-3">
                            <input type="number" name="score" id="" class="form-control inputs" max = "10" min = "1" placeholder ="Score">
                        </div>
                        <div class="col-sm-6 mb-2 ">
                            <a href="" class="btn btn-danger">Delete Question</a>
                        </div>
                        
                    </div>
                            <a href="" class="btn btn-primary btn-block" name = "submit" >Save</a>
                    <hr class="my-2">
                        
        </form>
        

        </div>
    </div>
</div>
</div>

<script>
    function generateFields() {
        let number = document.querySelector('input#no_fields').value;
    }
</script>
<?php require_once("includes/admin-footer.php"); ?>