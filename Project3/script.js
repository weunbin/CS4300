function capitalFirst() {
    var input = document.getElementById("fname");
    input.value = input.value.replace(/([^\W_]+[^\s-]*) */g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function capitalLast() {
    var input = document.getElementById("lname");
    input.value = input.value.replace(/([^\W_]+[^\s-]*) */g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function phone() {
    var input = document.getElementById("telephone");
    var regex = /^(\D{1}[0-9]{3}\D{1}[0-9]{3}\D{1}[0-9]{4})$/;
    var regex2 = /^([0-9]{3}\D{1}[0-9]{3}\D{1}[0-9]{4})$/;
    if (!regex.test(input.value) && !regex2.test(input.value)) {
        alert("Incorrect Format: <something>ddd<something>ddd<something>dddd");
        input.value = "";
    }
}
