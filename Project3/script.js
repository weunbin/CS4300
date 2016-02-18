

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


function autoComplete(){
    var textArray = [];
    var cityArray = [];
    var zipcodeArray = [];
    var tempArray = [];
    var filePath = "\zipcodes.csv";
    var zipCodeInc = 0;
    var text;
    
    var csvFile = new XMLHttpRequest();
    csvFile.open("GET", filePath, false);
    csvFile.onreadystatechange = function ()
    {
        if(csvFile.readyState === 4)
        {
            if(csvFile.status === 200 || csvFile.status == 0)
            {
                text = csvFile.responseText;
                textArray = text.split("\n");
                
                for(i = 0; i < textArray.length; i++){
                    for(j = 0; j < textArray[i].length; i++){
                        tempArray = textArray[i].split(",");
                        cityArray[i] = tempArray[0];
                        var zipcodeLength = tempArray.length - 1;
                        for(k = 0; k < zipcodeLength; k++){
                            zipcodeArray[i] = tempArray[k+1];
                        }
                    }
                }
            }
        }
    }
    csvFile.send(null);
    var options = '';
    for(var o = 0; o < cityArray.length; o++){
        options += '<option value="'+cityArray[o]+'"/>';
    }
    document.getElementById('cities').innerHTML = options;
    
    var zipCodeoptions = '';
    for(var m = 0; m < zipcodeArray.length; m++){
        zipCodeoptions += '<option value="'+zipcodeArray[m]+'"/>';
    }
    document.getElementById('zipcodes').innerHTML = zipCodeoptions;
    
    
                                    
}

