function validateInputs() {
    console.log("function working...")
    let inputs = document.querySelectorAll(".needs-validation");
    console.log(inputs);
    let submitBtn = document.querySelector("#subtn");
    let validArray = [];
    let msg;
    inputs.forEach((input, index) => {
        console.log("looped successfully..."+ inputs)
        console.log(input+index);
        input.addEventListener("blur", function(e){
            console.log("blured successsfully..."+input);
            let currentInput = e.target;
            let currentInputValue = currentInput.value;//text-content or innerHtml not appropriate here
                
            if(currentInput.classList.contains("not-required") == false) {
                if (validateRequiredInputs(currentInputValue)){//input not empty
                    console.log("current input is not empty")
                    // isValid(currentInput);
                        if(currentInput.classList.contains("text-only")) {
                            if(validateTextOnlyInputs(currentInputValue)) {//input valid
                                isValid(currentInput);
                            }else{
                                isNotValid(currentInput,currentInputValue);
                            }//end validated text-only
                        }//end text-only if
                        if(currentInput.type == "email") {
                            if(validateEmail(currentInputValue)) {
                                isValid(currentInput);
                            }else{
                                isNotValid(currentInput,currentInputValue);
                            }
                        }//end type email
                        if(currentInput.id == "address"){
                            if(validateAdrress(currentInputValue)) {
                                isValid(currentInput);
                            }else{
                                isNotValid(currentInput,currentInputValue);
                            }
                        }//end type address
                        if(currentInput.id == "username"){
                            if(validateUsername(currentInputValue)) {
                                isValid(currentInput);
                            }else{
                                isNotValid(currentInput,currentInputValue);
                            }
                        }//end type username
                        if(currentInput.type == "password"){
                            if(validatePassword(currentInputValue)){
                                isValid(currentInput);
                            }else{
                                isNotValid(currentInput,currentInputValue);
                            }
                        }
                        if(currentInput.id == "phone"){
                            if(validatePhone(currentInputValue)){
                                isValid(currentInput);
                            }else{
                                isNotValid(currentInput,currentInputValue);
                            }
                        }//end phone
                }else{//input empty
                    isNotValid(currentInput,currentInputValue);
                }//end validate require
            }//end not required if
            
            if(isAllValidated(inputs)){
            submitBtn.removeAttribute("disabled");
        }else{
            submitBtn.setAttribute("disabled","true");
        }
        })//end event  listener
        
    })//end forEach

    function isAllValidated(e) {
        if(validArray.length == e.length){//means all inputs are valid
            return true;
        }else{
            return false;
        }
    }

    function isNotValid(e,value) {
        e.classList.add("invalid");
        e.classList.remove("border-success");
        e.classList.add("border-danger");
        e.classList.remove("border-top-0")
        e.classList.remove("border-right-0");
        e.classList.remove("border-left-0");
        if(e.type == "password"){
            msg = e.previousElementSibling;
        }else{
            msg =  e.nextElementSibling;
        }     
        msg.style.display ='block';
        msg.textContent =  setCustomMessage(e,value);
    }

    function isValid(e) {
        e.classList.remove("invalid");
        e.classList.add("valid");
        e.classList.remove("border-danger");
        e.classList.add("border-success");
        e.classList.remove("border-top-0")
        e.classList.remove("border-right-0");
        e.classList.remove("border-left-0");
        if(e.type == "password"){
            msg = e.previousElementSibling;
        }else{
            msg = e.nextElementSibling;
        }
        msg.style.display = 'none';
        msg.textContent = "";
        if(!validArray.includes(e)){
            validArray.push(e);
        }
        
    }

    function setCustomMessage(e,value) {
       let  customMessageEmpty = ["This field is required", "Invalid response"],
         customMessageRegular = ["Name fields must only contain alphabets","Email must be in format:someone@example.com","Address Invalid.Use format: 123 some street example",
         "Phone number is not valid.","Password must be at least 8 characters long.","Username should be between 5 to 15 characters","Passwords don't match"];

        if(value != ""){
            if (e.classList.contains("text-only")) {
                return customMessageRegular[0];
            } else if (e.type == "email") {
                return customMessageRegular[1];
            }else if (e.id == "address") {
                return customMessageRegular[2];
            }else if(e.id == "phone") {
                return customMessageRegular[3];
            }else if(e.id == "password") {
                return customMessageRegular[4];
            }else if(e.id == "username") { 
                return customMessageRegular[5];
            }else {
                return customMessageEmpty[1];
            }
        }else if(value == ""){
            return customMessageEmpty[0];
        } 
    }

    function validateRequiredInputs(e) {
        if(e == ""){
            return false;
        }else{
            return true;
        }
    }

    function validateTextOnlyInputs(e) {
        let textPattern = /^[A-Za-z]+$/;
        if(textPattern.test(e)){
            return true;
        }else{
            return false;
        }
    }

    function validateEmail(e) {
        let emailPattern = /^[\w ]{1,20}[@][\w]{1,20}[.][a-zA-Z]{2,3}$/;
        if(emailPattern.test(e)) {
            return true;
        }else{
            return false;
        }
    }

    function validateAdrress(e) {
        let addressPattern = /^[\d]*[\w]+/;
        if(addressPattern.test(e)) {
            return true;
        }else{
            return false;
        }
    }

    function validateUsername(e) {
        let usernamePatt = /^[\w]{5,15}$/;
        if(usernamePatt.test(e)) {
            return true;
        }else{
            return false;
        }
    }
     function validatePassword(e) {
       let passPatt =  /^[\w]{8,50}$/;
       if(passPatt.test(e)) {
           return true;
       }else{
           return false;
       }
     }

     function validatePhone(e) {
         let phonePatt = /^[\d]{10,12}$/;
        if(phonePatt.test(e)) {
            return true;
        }else {
            return false;
        }
     }

 }
 validateInputs();

 function comparePasswords(first,sec,btn){
     let initial = document.querySelector("#"+first);
     let later = document.querySelector("#"+sec);
     let submitBtn = document.querySelector('#'+btn);

     if(initial.value != later.value){
        msg = later.previousElementSibling;
        msg.style.display ='block';
        msg.textContent =  "Passwords don't match";
        later.classList.add("border-danger");
        initial.classList.add("border-danger");
        later.textContent="";
        submitBtn.setAttribute("disabled", "true");
     }else{
         msg = later.previousElementSibling;
         msg.style.display = 'none';
         msg.textContent = "";
         later.classList.replace("border-danger","border-success");
         initial.classList.replace("border-danger","border-success");
         submitBtn.removeAttribute("disabled");
     }
 }

 function compareOldPassword($old, $new, btn) {
    let initial = document.querySelector("#"+$old);
     let later = document.querySelector("#"+$new);
     let submitBtn = document.querySelector('#'+btn);

    if(initial.value != later.value){
        msg = later.previousElementSibling;
        msg.style.display ='block';
        msg.textContent =  "Password does not match Existing";
        later.classList.add("border-danger");
        later.textContent="";
        submitBtn.setAttribute("disabled", "true");
    }else{
        msg = later.previousElementSibling;
         msg.style.display = 'none';
         msg.textContent = "";
         later.classList.replace("border-danger","border-success");
         submitBtn.removeAttribute("disabled");
    }
}