function renderDate(){
    var mydate = new Date();
    var year = mydate.getYear();
        if (year < 1000){
            year += 1900
        }
    var day = mydate.getDay();
    var month = mydate.getMonth();
    var daym = mydate.getDate();
    var dayarray = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    var myDateDisplay = document.getElementById("dateDisplay");
    myDateDisplay.textContent = "" + dayarray[day] + "" + montharray[month] + "" + year;
    myDateDisplay.innerText = "" + dayarray[day] + "" + montharray[month] + "" + year;

    setTimeout("renderDate()", 1000);
}
renderDate();