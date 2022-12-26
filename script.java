var nameError = document.getElementById('name-error');
var phoneError = document.getElementById('phone-error');
var emailError = document.getElementById('email-error');
var submitError = document.getElementById('subit-error');
function validateName(){
    var name =document.getElementById('contact-name').value;
    if(name.lenght==0){
        nameError.innerHTML ='Name is required';
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
         nameError.innerHTML ='Write full name';
         return false;
        
    }
    nameError.innerHTML = 'valid';
     return true;
}

function validatephone(){
    var phone =document.getElementById('contact-phone').value;
if(phone.lenght == 0 ){
    phoneError.innerHTML = 'phone no is required';
    return false;
}
if(phone.lenght !== 11){
    phoneError.innerHTML = 'phone no should be 11 digits';
    return false;
}
if(!phone.match(/^[0-10]{11}$/)){
    phoneError.innerHTML = 'Only digits please.';
    return false;
}
phoneError.innerHTML = 'valid';
return true;

}
function validateEmail(){
    var email =document.getElementById('contact-email').value;
    if(email.lenght == 0){
        emailError.innerHTML = 'Email is required'
        return false;
    }
    if(!email.match(/^[A-Za-z]\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailError.innerHTML = 'Email Invalid'
        return false;
    }
    emailError.innerHTML ='valid';
    return true;
}
function validateForm(){
    if(!validateName() || !validatephone() || !validateEmail() ){
        submitError.innerHTML ='please fix error to subit';
        return false;
    }
}



