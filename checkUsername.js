$(document).ready(function(){

function checkLengthUsername(){
    var textbox = document.getElementById("textbox");
    if(textbox.value.length <= 50 && textbox.value.length >= 6){
        alert("success");
    }
    else{
        alert("make sure the input is between 6-50 characters long")
    }
}

});
