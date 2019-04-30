function showtime(){

    var currentTime = new Date();

    var m = addZero(currentTime.getMinutes());
    var s = addZero(currentTime.getSeconds());

    document.getElementById('time').innerHTML = currentTime.getHours() + ":" + m + ":" + s;

    var t = setTimeout(showtime,500);

}

function addZero(i) {
    if(i < 10){i = "0" + i;}
    return i;
}

function testAlert() {

    alert("this is a test")

}