function changepage(x) {
    var name = "";

    if (x == 1) {
        name = "/index";
    } else if (x == 2) {
        name = "/transactions";
    } else if (x == 3) {
        name = "/investments";
    } else if (x == 4) {
        name = "/transferFunds";
    }

    window.open(name, "_self");
}

function login() {
    window.open("/index", "_self");
    return true;
}

function addmsg() {}

function changecurrency() {
    var selcur = document.getElementById("selcur");
    var amnt = document.getElementById("amnt");
    var res = document.getElementById("result");

    var total = parseFloat(selcur.value) * parseFloat(amnt.value);

    res.value = total;
}

function done() {
    alert("sent successfully  !!! ");
}
