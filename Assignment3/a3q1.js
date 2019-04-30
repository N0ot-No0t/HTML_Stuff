function f() {

    var textArea = document.getElementById("textArea");
    var textBox1 = document.getElementById("text1");
    var textBox2 = document.getElementById("text2");
    var textBox3 = document.getElementById("text3");
    var label = document.getElementById("label");

    var userInput = textArea.value;
    var userInputArray = userInput.split(textBox1.value);
    var regexp = new RegExp(textBox2.value,textBox3.value);
    var nbWords = 0;
    var nbMatch = 0;

    for (var i = 0; i < userInputArray.length; i++){

        if(userInputArray[i] !== ""){
            nbWords++;
        }
        if(regexp.test(userInputArray[i])){

            nbMatch++;

        }

    }

    label.innerText = "There is a total of "+nbWords+" non-empty words in the text, including "+nbMatch+" words matching the regex.";




}