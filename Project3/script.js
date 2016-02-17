function capitalFirst() {
    var input = document.getElementById("fname");
    input.value = input.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function capitalLast() {
    var input = document.getElementById("lname");
    input.value = input.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}
