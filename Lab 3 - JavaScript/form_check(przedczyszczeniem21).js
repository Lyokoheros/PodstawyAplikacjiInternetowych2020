function isempty(znaki) {
    if(znaki.length==0){
        return true;
    }
    else{
        return false;
    }

}

function checkEmail(str) {
    let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
    if (email.test(str)){
        return true;
    }    
    else {
        return false;
    }
}
   

function isWhiteSpaceOrEmpty(str) {
    
    return /^[\s\t\r\n]*$/.test(str);
   }

function checkString(str, mess){
    if (isWhiteSpaceOrEmpty(str)){
        alert(mess)
        return false
    }
    else{
        return true
    }
}

function checkStringAndFocus(obj, msg) {
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (chceckfunction(str)) {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }
    else {
        document.getElementById(errorFieldName).innerHTML = "";
        return true;
    }
}

function checkEmailAndFocus(obj) {
    let msg="Podaj właściwy e-mail"
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (isWhiteSpaceOrEmpty(str)) {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }
    else 
    {
        document.getElementById(errorFieldName).innerHTML = "";

        return true;
    }
}
   


function validate(form){   
    var error = false

    if(!checkStringAndFocus(form.elements["f_imie"], "Podaj imię!")) {error = true}

    if(!checkStringAndFocus(form.elements["f_nazwisko"], "Podaj nazwisko!")) {error = true}

    if(!checkEmailAndFocus(form.elements["f_email"])) {error = true}

    if(!checkStringAndFocus(form.elements["f_kod"], "Podaj kod!")) {error = true}
    
    if(!checkStringAndFocus(form.elements["f_ulica"], "Podaj ulicę!")) {error = true}
    
    if(!checkStringAndFocus(form.elements["f_miasto"], "Podaj miasto!")) {error = true}
        
    if(error){
        return false
    }
    else{
        return true;
    }
}
