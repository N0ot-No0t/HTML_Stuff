var dom;

function getElementAmpersandPipe(){

    dom = document.getElementById("field");

    dom.addEventListener("blur",convertAmpersandPipe,false);

    console.log(dom.value)
}

function convertAmpersandPipe() {
    var changed;

    changed = dom.value.split("&").join("and");

    changed = changed.split("|").join("or");

    document.getElementById("result").value = changed;

}

window.addEventListener("load",getElementAmpersandPipe,false);