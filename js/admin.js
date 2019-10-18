function displayTime() {
    let currentDate = new Date(),
     year = currentDate.getYear(),
        if(year < 1000){
            year += 1900;
        }
     day = currentDate.getDay(),
     month = currentDate.getMonth(),
     day_mth = currentDate.getDate(),
     day_array = new Array("Sun.","Mon.","Tues.","Wed.","Thurs.","Fri.","Sat."),
     month_array = new Array("Jan","Feb","March","April","May","June","July","Aug.","Sept.","Oct.","Nov.","Dec.");

     //Time
     let currentTime = new Date(),
     h = currentTime.getHours(),
     m = currentTime.getMinutes(),
     s = currentTime.getSeconds();
        if(h == 24){
            h = 0;
        }
        if(h < 10) {
            h += "0"; 
        }
        if(m < 10){
            m += "0";
        }
        if(s < 10){
            s += "0";
        }
        const clock = document.querySelector('p#clock');
        clock.textContent = day_array[day]+ " "+day_mth+" "+montharray[month]+ " "+year+ " | "
        +h+ ":"+m+":"+"s";

        setTimeout("displayTime()", 1000);
 }
 displayTime();