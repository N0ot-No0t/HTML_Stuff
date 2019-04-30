
var input = null;
var nbInputs = 0;
var nbOdds = 0;
var nbEvens = 0;


while(input !== ""){

input = prompt("Please enter a number:");

    if(input >= 0 && input !== "" && input % 1 === 0) {

        nbInputs++;

        if ((input % 2) === 0) {

            nbEvens++;

        } else{

            nbOdds++;

        }
    }

    if(input === null){

        input = "0";
        break;

    }

}

document.write("You entered a total of "+nbInputs+" number(s).</br>")
document.write("You entered ",nbOdds," odd number(s).</br>")
document.write("You entered ",nbEvens," even number(s).</br>")