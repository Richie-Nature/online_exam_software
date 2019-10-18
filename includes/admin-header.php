<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- <script src="../js/admin.js"></script> -->
    <title>Admin|<?php if(isset($admin_page)){echo $admin_page;}?></title>
    <script>
        function displayTime() {
    let currentDate = new Date(),
     year = currentDate.getYear();
        if(year < 1000){
            year += 1900;
        }
     let day = currentDate.getDay(),
     month = currentDate.getMonth(),
     day_mth = currentDate.getDate(),
     day_array = new Array("Sun.","Mon.","Tues.","Wed.","Thurs.","Fri.","Sat."),
     month_array = new Array("Jan","Feb","March","April","May","June","July","Aug.","Sept.","Oct.","Nov.","Dec.");
     const suffix = getDayOfMonthSuffix(day_mth);
     //Time
     let currentTime = new Date(),
     h = currentTime.getHours(),
     m = currentTime.getMinutes(),
     s = currentTime.getSeconds();
        if(h == 24){
            h = 0;
        }
        if(h < 10) {
            h = "0" + h; 
        }
        if(m < 10){
            m = "0" + m;
        }
        if(s < 10){
            s = "0" + s;
        }
        const clock = document.querySelector('p#clock');
        clock.textContent = day_array[day]+ " "+day_mth+suffix+" "+month_array[month]+ " "+year+ " | "
        +h+ ":"+m+":"+s;

        setTimeout("displayTime()", 1000);
 }
 displayTime();
 function timeOnly(h,m,s) {
        if(h == 24){
            h = 0;
        }
        if(h < 10) {
            h = "0" + h; 
        }
        if(m < 10){
            m = "0" + m;
        }
        if(s < 10){
            s = "0" + s;
        }
        if(s > 0){
            s -= 1;
        }else
        if(s == 0) {
            m -=1;
            s == 59;
        }
        if(m == 0) {
            h -= 1;
            m == 59;
        }
        const clock = document.querySelector('td#clock');
        clock.textContent =
        +h+ ":"+m+":"+s;

        return h,s,m;
        
 }


function getDayOfMonthSuffix(n) {
    switch(n % 10) {
        case 1: return "st";
        case 2: return "nd";
        case 3: return "rd";
        default: return "th";
    }
 }
    </script>
</head>
<body onload="displayTime();"  >
   
