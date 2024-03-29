<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <title>Online Exam Software|<?php if(isset($admin_page)){echo $admin_page;}?></title>
    <script>
        $(document).ready(function(){
            const page = "<?php if(isset($admin_page)){echo $admin_page;}?>";
            if (page == "Dashboard" || page == "Monitor Exams" || page == "Certifications & Results") {
                displayTime();
            }
        })
    </script>
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
<body>
   
