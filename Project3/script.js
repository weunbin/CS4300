function capitalFirst() {
    var input = document.getElementById('fname');
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

function autoCompleteZipcode(){
    var textArray = [];
    var cityArray = [];
    var zipcodeArray = [];
    var tempArray = [];
    var filePath = "zipcodes.csv";
    var zipCodeInc = 0;
    var text = '';
    
    var csvFile = new XMLHttpRequest();
    csvFile.open("GET", filePath,false);
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
                        zipcodeArray[i] = new Array(zipcodeLength);
                        for(k = 0; k < zipcodeLength; k++){
                            zipcodeArray[i][k] = tempArray[k+1];
                            zipcodeArray[i][k] = zipcodeArray[i][k].replace(/[\r\n]/,'');
                        }
                    }
                }
            }
        }
    }
    
    csvFile.send(null);
    var notFound = true;
    var citySelected = document.getElementById('city');
    var selectedCity = citySelected.value;
    var zipCodeoptions = '';
    var getCity = 0;
    for(var q = 0; q < cityArray.length; q++){
        if(selectedCity == cityArray[q]){
            getCity = q;
            notFound = false;
        }
    }
    for(var n = 0; n < zipcodeArray[getCity].length; n++){
        if(!notFound)
            zipCodeoptions += '<option value="'+zipcodeArray[getCity][n]+'">' + zipcodeArray[getCity][n] +'</option>';
        else{
            zipCodeoptions += '<option value="not found">Not found</option>';
        }
    }
    document.getElementById('zipcodes').innerHTML = zipCodeoptions;
}

function alertCity(){
    var textArray = [];
    var cityArray = [];
    var zipcodeArray = [];
    var tempArray = [];
    var filePath = "zipcodes.csv";
    var zipCodeInc = 0;
    var text = '';
    
    var csvFile = new XMLHttpRequest();
    csvFile.open("GET", filePath,false);
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
                    }
                }
            }
        }
    }
    
    csvFile.send(null);
    var notFound = true;
    var citySelected = document.getElementById('city');
    var selectedCity = citySelected.value;
    for(var q = 0; q < cityArray.length; q++){
            if(selectedCity == cityArray[q])
                notFound = false;
    }      
    if(notFound)
        alert(selectedCity + ' Does not exist!');
}

function autoCompleteCity(){
    var textArray = [];
    var cityArray = [];
    var zipcodeArray = [];
    var tempArray = [];
    var filePath = "zipcodes.csv";
    var zipCodeInc = 0;
    var text = '';
    
    var csvFile = new XMLHttpRequest();
    csvFile.open("GET", filePath,false);
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
                    }
                }
            }
        }
    }
    var complete;
    var tempInput;
    var tempCity;
    var same = 0;
    var finish = document.getElementById("city").value;
    tempInput = finish.toUpperCase();
    var leng = tempInput.length;
    csvFile.send(null);
    var options = '';
    for(var o = 0; o < cityArray.length; o++){
        tempCity = cityArray[o].substr(0,leng).toUpperCase();
        if (Boolean(tempCity == tempInput)) {
            if (Boolean(same == 0)) {
                complete = cityArray[o];
            }
            same++;
        }
        options += '<option value="'+cityArray[o]+'">';
    }
    document.getElementById('cities').innerHTML = options;
    if (Boolean(same == 1)) {
        document.getElementById("city").value = complete;
    }
}
