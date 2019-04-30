
function calculateTotal(){

    var frm = document.getElementById("frm");
    var unitRoses = document.getElementById("rose").value;
    var unitLily = document.getElementById("lily").value;
    var unitCalla = document.getElementById("calla").value;
    var unitOrchid = document.getElementById("orchid").value;
    var unitDaisy = document.getElementById("daisy").value;
    var extra;

    if(document.getElementById("op1").checked){

        extra = document.getElementById("op2").value;

    }else{
        extra = document.getElementById("op1").value;
    }

    if(!unitRoses.match(/\S/) || !unitLily.match(/\S/) || !unitCalla.match(/\S/)|| !unitOrchid.match(/\S/)|| !unitDaisy.match(/\S/) || isNaN(unitRoses) || isNaN(unitLily) || isNaN(unitCalla) || isNaN(unitOrchid) || isNaN(unitDaisy)){

        alert("One or more fields is not filled up. Please review your submission");
        return;

    }
    var totalCost = unitRoses * 5.5 + unitLily * 7.5 + unitCalla * 4.0 + unitOrchid * 8.0 + unitDaisy * 7.0 + extra;


    var p = new Array();
    for(var i = 0; i < 7; i++){
        p[i] = document.createElement("p")
    }
    p[0].innerText = "Red Roses (units = "+unitRoses+"): $"+(unitRoses*5.5);

    p[1].innerText = "Yellow Lily (units = "+unitLily+"): $"+(unitLily*7.5);

    p[2].innerText = "White Mini Calla (units = "+unitCalla+"): $"+(unitCalla*4.0);

    p[3].innerText = "Pink Orchid (units = "+unitOrchid+"): $"+(unitOrchid*8.0);

    p[4].innerText = "Orange Daisy (units = "+unitDaisy+"): $"+(unitDaisy*7.0);

    p[5].innerText = "Delivery: $"+extra;

    p[6].innerText = "Final Total: $"+totalCost;

    for(var i = 0; i < 7; i++){
        frm.appendChild(p[i]);
    }

}