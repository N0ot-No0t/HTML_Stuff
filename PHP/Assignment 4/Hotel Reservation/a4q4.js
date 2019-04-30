function askExpert() {

    var e = document.getElementById("ddl1");
    var option = e.options[e.selectedIndex].value;

    var checkedValue = null;
    var inputElements = document.getElementsByClassName("cb");
    for(var i = 0; i < inputElements.length; i++){

        if(inputElements[i].checked){
            checkedValue = inputElements[i].value;
            break;
        }

    }

    if(option == 50 && checkedValue == 0){
        var expertFieldset = document.getElementById("expertFieldset");
        expertFieldset.style.visibility = "visible";
        var expertLegend = document.getElementById("expertLegend");
        expertLegend.innerHTML = "Expert Suggestion";
        var list = document.createElement("UL");
        var listElement = document.createElement("LI");
        var text = document.createTextNode("It is very difficult to find a hotel room in this price range at Downtown")

        listElement.appendChild(text);
        listElement.appendChild(document.createElement("br"));
        list.appendChild(listElement);
        expertLegend.appendChild(listElement);


    }

}

function showtime(){

    var currentTime = new Date();

    var m = addZero(currentTime.getMinutes());
    var s = addZero(currentTime.getSeconds());

    document.getElementById('time').innerHTML = "Time: "+currentTime.getHours() + ":" + m + ":" + s;

    var t = setTimeout(showtime,500);

}

function addZero(i) {
    if(i < 10){i = "0" + i;}
    return i;
}

function disclaimerStatement(){

alert("We promise users that their information will not be sold or misused. We protect the website from any incorrect information")

}