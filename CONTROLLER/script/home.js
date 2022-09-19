function autoTimeUpdate(){
    var dateTime = new Date();
    var hours = dateTime.getHours();
    var minutes = (dateTime.getMinutes()<10?'0':'') + dateTime.getMinutes() ;
    var seconds = (dateTime.getSeconds()<10?'0':'') + dateTime.getSeconds();
    var am_or_pm = document.getElementById('am_or_pm');

    if(hours >= 12){
        am_or_pm.innerHTML = 'PM';
    }else{
        am_or_pm.innerHTML = 'AM';
    }
    
    if(hours > 12){
        hours = hours - 12;
    }
    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;
}

setInterval(autoTimeUpdate, 1000)