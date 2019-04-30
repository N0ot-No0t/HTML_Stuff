var input = 0;
var table = document.createElement("table");
table.setAttribute("width","50%");
table.setAttribute("border","1");
var body = document.getElementsByTagName("body")[0];
var tbody = document.createElement("tbody");


while(input <= 0) {
    input = prompt("Enter a number");
}

for (var i = 0; i < parseInt(input) + 1; i++){

    var row = document.createElement("tr");

    for (var j = 0; j < parseInt(input) + 1; j++){

        var col = document.createElement("td");

        var text;

        if(i === 0 && i !== j){

            text = document.createTextNode((i + 1)*(j));

        }else if(j === 0 && i !== j){

            text = document.createTextNode((i)*(j + 1));

        }else{

            text = document.createTextNode(i*j);

        }


        col.appendChild(text);
        row.appendChild(col);

    }

    table.appendChild(row);

}

tbody.appendChild(table);

body.appendChild(tbody);