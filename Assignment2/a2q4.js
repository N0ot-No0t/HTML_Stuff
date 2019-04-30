
function a2q4(names) {

    var occurrences = 0;

    for (var i = 0; i < names.length; i++){


        if((names[i].search(/^pa/) !== -1 && names[i].search(/u/) === -1)||(names[i].search(/^po/) !== -1 && names[i].search(/u/) === -1)){

            occurrences++;

        }

    }

    return occurrences;

}