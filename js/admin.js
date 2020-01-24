// function displayTime() {
//     let currentDate = new Date(),
//      year = currentDate.getYear(),
//         if(year < 1000){
//             year += 1900;
//         }
//      day = currentDate.getDay(),
//      month = currentDate.getMonth(),
//      day_mth = currentDate.getDate(),
//      day_array = new Array("Sun.","Mon.","Tues.","Wed.","Thurs.","Fri.","Sat."),
//      month_array = new Array("Jan","Feb","March","April","May","June","July","Aug.","Sept.","Oct.","Nov.","Dec.");

//      //Time
//      let currentTime = new Date(),
//      h = currentTime.getHours(),
//      m = currentTime.getMinutes(),
//      s = currentTime.getSeconds();
//         if(h == 24){
//             h = 0;
//         }
//         if(h < 10) {
//             h += "0"; 
//         }
//         if(m < 10){
//             m += "0";
//         }
//         if(s < 10){
//             s += "0";
//         }
//         const clock = document.querySelector('p#clock');
//         clock.textContent = day_array[day]+ " "+day_mth+" "+montharray[month]+ " "+year+ " | "
//         +h+ ":"+m+":"+"s";

//         setTimeout("displayTime()", 1000);
//  }
function triggerClick(id) {
    document.querySelector("#"+id).click();
}

function displayImage(e,id) {
    if(e.files[0]) {//if image has been selected
        let imgReader = new FileReader;

        imgReader.onload = function(e) {
            document.querySelector("#"+id).setAttribute('src',e.target.result);
        }
        imgReader.readAsDataURL(e.files[0]);
    }
}

function selected(e,fa_id) {
    // $("form").one("submit", function(event){
    //     event.preventDefault();
    //     triggerClick('crModalBtn');
    //     $(this).submit();
    // });
    $('#newAdminModal').on('hide.bs.modal', function(){
        $("#newAdminModal").modal('show');
    });
    let btn = document.querySelector(".sel-but");
    let fa = document.querySelector("#"+fa_id);
    let btns = document.querySelectorAll(".buttons");
    let fas = document.querySelectorAll(".modTablei");
    
    
    for( var i =0; i<btns.length; i++){
        btns[i].classList.remove("active");
        console.log("after removal of active "+ btns[i].classList)
        if(btns[i].classList.contains("btn-success")){
        btns[i].classList.replace("btn-success","btn-danger");
        
        }
        for( var j = 0; j<fas.length; j++){
            if(fas[j].classList.contains("fa-check")){ 
                console.log(fas[j].nodeName);
            fas[j].classList.replace("fas","far");
            fas[j].classList.replace("fa-check","fa-circle");
            }
        }
  
    }
    
    e.classList.add("active");
    console.log(e +" is e"+ e.classList)
        
    // fas[j].classList.replace("far","fas");
    // fas[j].classList.replace("fa-circle", "fa-check");
    if(e.classList.contains("active")){
        console.log("active found here");
         if(e.classList.contains("btn-danger")){
             console.log("danger found here"); 
    e.classList.replace("btn-danger","btn-success");
        let iClassList = e.getElementsByTagName("i");

        let iChild = iClassList[0];
        iChild.classList.replace("far","fas");
        iChild.classList.replace("fa-circle", "fa-check");
    }else if(e.classList.contains("btn-success")){
        console.log("danger not found");
        e.classList.replace("btn-success","btn-danger");
        for(var j = 0; j<iClassList; j++){ 
            if(j==1){break;}
        let iChild = iClassList[j];
        iChild.classList.replace("fas","far");
        iChild.classList.replace("fa-check","fa-circle");
        }
    }
    }else{
        console.log("active not found");
        btn.classList.replace("btn-success","btn-danger");
        fa.classList.replace("fas","far");
        fa.classList.replace("fa-check","fa-circle");
    }
   
   
}
function confirmCancel() {  
   confirm('You have unsaved changes; are you sure you want to leave this page?');
}
function confirmDelete() {
    confirm('Are you sure you want to delete this?');
}
function generateFields() {
    let numberofDivs = document.querySelector('#no_fields').value;
    let existingDiv = document.querySelectorAll('.ques_form');
    let noOfExisting = existingDiv.length;
    let i;
    //This if block confirms if user has already populated fields and then sets count to the last field index
    if(noOfExisting > 0){
        i = noOfExisting;
        numberofDivs = parseInt(numberofDivs) + parseInt(noOfExisting);//Value in #no_fields is string, so parsed to int in-order to add and not concatenate
        i++;//Move i to next index
    }else{
        i = 1;
    }
    
    let parent = document.querySelector("#exam-div");
    for( ;i<=numberofDivs; i++){
        let examDiv = document.createElement('div');
        examDiv.classList.add('exam-form-div');
        let hr = document.createElement('hr');
        hr.classList.add('my-2');
        let form = document.createElement('form');
        form.setAttribute("id", "form"+i);
        form.classList.add('ques_form');
        let smallText = document.createElement('small'); 
        smallText.classList.add('text-info');
        smallText.classList.add('mb-3');
        let smallTextNode = document.createTextNode('Use radio to indicate right answer');
        smallText.appendChild(smallTextNode);
        let st_formgroup = document.createElement('div');
        st_formgroup.classList.add('form-group');
        let st_row = document.createElement('div');
        st_row.classList.add('row');
        let st_col = document.createElement('div');
        st_col.classList.add('col-sm-1');
        let st_span = document.createElement('span');
        st_span.classList.add('ques_num');
        let spanText= document.createTextNode(i);
        st_span.appendChild(spanText);
        let st_secCol = document.createElement('div');
        st_secCol.classList.add('col-sm-11');
        let textArea = document.createElement('textarea');
        textArea.setAttribute('name','question');
        textArea.setAttribute('id', 'question'+i);
        textArea.setAttribute('cols', '30');
        textArea.setAttribute('rows','5');
        textArea.classList.add('form-control');
        textArea.classList.add('mb-2');
        textArea.setAttribute('placeholder','Enter Question');
        st_secCol.appendChild(textArea);
        let hiddenText = document.createElement('input');
        hiddenText.type = "hidden";
        hiddenText.classList.add('hiddenQuest');
        hiddenText.name = 'hiddenQuest';
        hiddenText.id = 'hiddenQuest'+i;
        hiddenText.value = "";
        st_secCol.appendChild(hiddenText);
        st_col.appendChild(st_span);
        st_row.append(st_col);
        st_row.append(st_secCol);
        st_formgroup.append(st_row);
        form.append(smallText);
        form.append(st_formgroup);
        let sec_formgroup = document.createElement('div');
        sec_formgroup.classList.add('form-group');
        let sec_row = document.createElement('div');
        sec_row.classList.add('row');
        let sec_rowCol = document.createElement('div');
        sec_rowCol.classList.add('col-1');
        let st_radioDiv = document.createElement('div');
        st_radioDiv.classList.add('custom-control');
        st_radioDiv.classList.add('custom-radio');
        let st_radio = document.createElement('input');
        st_radio.setAttribute('type','radio');
        st_radio.name = "answer"+i;
        st_radio.classList.add('answer1');
        st_radio.setAttribute('id','a'+i);
        st_radio.value = "a";
        st_radio.classList.add('custom-control-input');
        let st_radLabel = document.createElement('label');
        st_radLabel.setAttribute('for','a'+i);
        st_radLabel.classList.add('custom-control-label');
        let st_radLabelTxt = document.createTextNode('a.');
        st_radLabel.appendChild(st_radLabelTxt);
        st_radioDiv.append(st_radio);
        st_radioDiv.append(st_radLabel);
        sec_rowCol.append(st_radioDiv);
        let st_ansDiv = document.createElement('div');
        st_ansDiv.classList.add('col-11');
        st_ansDiv.classList.add('col-lg-5');
        st_ansDiv.classList.add('mb-2');
        let ansInput = document.createElement('input');
        ansInput.setAttribute('type','text');
        ansInput.setAttribute('placeholder','Answer...');
        ansInput.setAttribute('name','a');
        ansInput.setAttribute('id', 'option1'+i);
        ansInput.classList.add('form-control');
        ansInput.classList.add('option1');
        st_ansDiv.appendChild(ansInput);
        let sec_rowCol2 = document.createElement('div');
        sec_rowCol2.classList.add('col-1');
        let sec_radioDiv = document.createElement('div');
        sec_radioDiv.classList.add('custom-control');
        sec_radioDiv.classList.add('custom-radio');
        let sec_radio = document.createElement('input');
        sec_radio.setAttribute('type','radio');
        sec_radio.name = "answer"+i;
        sec_radio.classList.add('answer2');
        sec_radio.setAttribute('id','b'+i);
        sec_radio.value = "b";
        sec_radio.classList.add('custom-control-input');
        let sec_radLabel = document.createElement('label');
        sec_radLabel.setAttribute('for','b'+i);
        sec_radLabel.classList.add('custom-control-label');
        let sec_radLabelTxt = document.createTextNode('b.');
        sec_radLabel.appendChild(sec_radLabelTxt);
        sec_radioDiv.append(sec_radio);
        sec_radioDiv.append(sec_radLabel);
        sec_rowCol2.append(sec_radioDiv);

        let sec_ansDiv = document.createElement('div');
        sec_ansDiv.classList.add('col-11');
        sec_ansDiv.classList.add('col-lg-5');
        sec_ansDiv.classList.add('mb-2');
        let sec_ansInput = document.createElement('input');
        sec_ansInput.setAttribute('type','text');
        sec_ansInput.setAttribute('name','b');
        sec_ansInput.setAttribute('id', 'option2'+i);
        sec_ansInput.setAttribute('placeholder','Answer...');
        sec_ansInput.classList.add('form-control');
        sec_ansInput.classList.add('option2');
        sec_ansDiv.appendChild(sec_ansInput);
        
        
        sec_row.append(sec_rowCol);
        sec_row.append(st_ansDiv);
        sec_row.append(sec_rowCol2);
        sec_row.append(sec_ansDiv);
        sec_formgroup.append(sec_row);
        form.append(sec_formgroup);

        let third_formgroup = document.createElement('div');
        third_formgroup.classList.add('form-group');
        let third_row = document.createElement('div');
        third_row.classList.add('row');
        let third_rowCol = document.createElement('div');
        third_rowCol.classList.add('col-1');
        let third_radioDiv = document.createElement('div');
        third_radioDiv.classList.add('custom-control');
        third_radioDiv.classList.add('custom-radio');
        let third_radio = document.createElement('input');
        third_radio.setAttribute('type','radio');
        third_radio.name = "answer"+i;
        third_radio.classList.add('answer3');
        third_radio.setAttribute('id','c'+i);
        third_radio.value = "c";
        third_radio.classList.add('custom-control-input');
        let third_radLabel = document.createElement('label');
        third_radLabel.setAttribute('for','c'+i);
        third_radLabel.classList.add('custom-control-label');
        let third_radLabelTxt = document.createTextNode('c.');
        third_radLabel.appendChild(third_radLabelTxt);
        third_radioDiv.append(third_radio);
        third_radioDiv.append(third_radLabel);
        third_rowCol.append(third_radioDiv);
        let third_ansDiv = document.createElement('div');
        third_ansDiv.classList.add('col-11');
        third_ansDiv.classList.add('col-lg-5');
        third_ansDiv.classList.add('mb-2');
        let third_ansInput = document.createElement('input');
        third_ansInput.setAttribute('type','text');
        third_ansInput.setAttribute('name','c');
        third_ansInput.setAttribute('id', 'option3'+i);
        third_ansInput.setAttribute('placeholder','Answer...');
        third_ansInput.classList.add('form-control');
        third_ansInput.classList.add('option3');
        third_ansDiv.appendChild(third_ansInput);
        
        let fourth_rowCol = document.createElement('div');
        fourth_rowCol.classList.add('col-1');
        let fourth_radioDiv = document.createElement('div');
        fourth_radioDiv.classList.add('custom-control');
        fourth_radioDiv.classList.add('custom-radio');
        let fourth_radio = document.createElement('input');
        fourth_radio.setAttribute('type','radio');
        fourth_radio.name = "answer"+i;
        fourth_radio.classList.add('answer4');
        fourth_radio.setAttribute('id','d'+i);
        fourth_radio.value = "d";
        fourth_radio.classList.add('custom-control-input');
        let fourth_radLabel = document.createElement('label');
        fourth_radLabel.setAttribute('for','d'+i);
        fourth_radLabel.classList.add('custom-control-label');
        let fourth_radLabelTxt = document.createTextNode('d.');
        fourth_radLabel.appendChild(fourth_radLabelTxt);
        fourth_radioDiv.append(fourth_radio);
        fourth_radioDiv.append(fourth_radLabel);
        fourth_rowCol.append(fourth_radioDiv);
        let fourth_ansDiv = document.createElement('div');
        fourth_ansDiv.classList.add('col-11');
        fourth_ansDiv.classList.add('col-lg-5');
        fourth_ansDiv.classList.add('mb-2');
        let fourth_ansInput = document.createElement('input');
        fourth_ansInput.setAttribute('type','text');
        fourth_ansInput.setAttribute('name','d');
        fourth_ansInput.setAttribute('id', 'option4'+i);
        fourth_ansInput.setAttribute('placeholder','Answer...');
        fourth_ansInput.classList.add('form-control');
        fourth_ansInput.classList.add('option4');
        fourth_ansDiv.appendChild(fourth_ansInput);

        third_row.append(third_rowCol);
        third_row.append(third_ansDiv);
        third_row.append(fourth_rowCol);
        third_row.append(fourth_ansDiv);
        third_formgroup.append(third_row);
        form.append(third_formgroup);

        let fourth_row = document.createElement('div');
        fourth_row.classList.add('row');
        let score_div = document.createElement('div');
        score_div.classList.add('col-sm-6');
        score_div.classList.add('mb-3');
        let score_input = document.createElement('input')
        score_input.setAttribute('type','number')
        score_input.setAttribute('name','score')
        score_input.setAttribute('id','score'+i)
        score_input.setAttribute('max','10')
        score_input.setAttribute('min','1')
        score_input.setAttribute('placeholder','score')
        score_input.classList.add('form-control');
        score_div.appendChild(score_input);

        let delete_div = document.createElement('div');
        delete_div.classList.add('col-sm-6');
        delete_div.classList.add('mb-2');
        let delForm = document.createElement('form');
        delForm.id = 'delForm'+i;
        let id = document.createElement('input');
        id.classList.add('ids');
        id.hidden = true;
        id.name = "question_num";
        let delbtn = document.createElement('button');
        delbtn.type = 'submit';
        delbtn.classList.add('btn')
        delbtn.classList.add('btn-danger')
        delbtn.classList.add('delete');
        delbtn.id = i;
        let delbtnTxt = document.createTextNode('Delete Question');
        delbtn.append(delbtnTxt);
        delForm.appendChild(id);
        delForm.appendChild(delbtn);
        delete_div.appendChild(delForm);

        fourth_row.append(score_div);
        fourth_row.append(delete_div);
        form.append(fourth_row);
        let save = document.createElement('button');
        save.type = "button";
        save.classList.add('btn');
        save.classList.add('save');
        save.classList.add('btn-primary');
        save.classList.add('btn-block');
        save.name = "saveQues";
        save.setAttribute('id',i);
        let savelth = document.createTextNode('Save');
        save.appendChild(savelth);
        let quesNo = document.createElement('input');
        quesNo.setAttribute('type','hidden');
        quesNo.setAttribute('name','quesNo');
        quesNo.setAttribute('value',i);

        let examId = document.createElement('input');
        examId.setAttribute('type','hidden');
        examId.setAttribute('name','exam-id');
        examId.value = "<?php if(isset(examId))echo examId;?>";

        let hr2 = document.createElement('hr');
        hr2.classList.add('my-2');
        form.append(save);
        form.append(quesNo);
        form.append(examId);
        form.append(hr2);
        examDiv.append(hr);
        examDiv.append(form);
        parent.append(examDiv);
    }
    console.log(`${noOfExisting} div's existing on page.`);
    console.log(`${i} last field index`);
}
