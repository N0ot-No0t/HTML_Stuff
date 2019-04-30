var userVariables = new Array();
var nbVariables = 0;
var found = false;
var textBox;
var list;
var userInput = "";


function addVariable() {

    textBox = document.getElementById("textBox");
    list = document.getElementById("variableList");

    userInput = textBox.value;


    for (var i = 0; i < userVariables.length; i++) {

        if (userInput === userVariables[i]) {

            found = true;


            break;


        }

    }

    if (userInput.search("^[a-z]") !== -1 && !found) {

        //userVariables[nbVariables] = userInput;
        userVariables.push(userInput);
        textBox.value = "";
        //userInput = "";
        nbVariables++;


        var node = document.createElement("LI");
        var textNode = document.createTextNode(userVariables[nbVariables - 1]);
        //list.removeChild(list.childNodes[i]);
        node.appendChild(textNode);
        list.appendChild(node);
    }

    found = false;
    console.log("variable f1: "+userInput);
}

function validateVariable() {
    //userVariables[nbVariables] = "";
    textBox = document.getElementById("textBox");
    list = document.getElementById("variableList");
    userInput = textBox.value;
    console.log("variable f2: "+userInput);
    try {
        //var regex1 = userInput.search("^[a-z]+[^.]");
        //var regex2 = userInput.search("^[a-z]+[\d]");
        var regex3 = userInput.search("^[a-z]+[_]");
    }catch (e) {

    }


    for (var i = 0; i < userVariables.length; i++) {

        if (userInput === userVariables[i]) {

            found = true;


            break;


        }

    }


        if (found || regex3 == -1) {

            textBox.classList.add("error");
            textBox.className = "error";
            console.log("found");
            found = false;


        } else {
            textBox.classList.add("normal");
            textBox.className = "normal";
            console.log("not found");

        }



}