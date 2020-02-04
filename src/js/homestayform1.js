function validateForm() {
    var fullName = document.getElementById('fullName').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var msg1 = document.getElementById('msg1');
    var msg2 = document.getElementById('msg2');
    var msg3 = document.getElementById('msg3');
    
    if(fullName == "") {
        msg1.textContent = "Full name cannot be empty";
        return false;
    }
    var abc = /^([a-zA-Z]+|[a-zA-Z]+\s{1}[a-zA-Z]{1,}|[a-zA-Z]+\s{1}[a-zA-Z]{3,}\s{1}[a-zA-Z]{1,})$/g;
    if(!abc.test(fullName)){
        msg1.textContent="Enter valid full name.";
        return false;
    }
    else{
    msg1.textContent = "";
    }
    
    if(email == "") {
        msg2.textContent = "Email cannot be empty";
        return false;
    }
     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(email)){
    msg2.textContent="Enter valid Email.";       
    return false;
    }
    else{
        msg2.textContent = "";
    }
    if(contact == "")
        {
            msg3.textContent = "Contact cannot be empty";
            return false;
        }
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if(!phoneno.test(contact)){
    msg3.textContent="Enter valid Number.";       
    return false;
    }
    else{
        msg3.textContent = "";
        return true;
    }
    
}