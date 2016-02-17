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
    var regex = new RegExp("(\D\d{3}\D\d{3}\D\d{4})");
    var regex2 = new RegExp("(\d{3}\D\d{3}\D\d{4})");
    if (!regex.test(input.value) && !regex2.test(input.value)) {
        alert("Incorrect Format: <something>ddd<something>ddd<something>dddd");
    }
}
