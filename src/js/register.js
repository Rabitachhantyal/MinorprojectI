function validateForm() {
    var fullName = document.getElementById('fullName').value;
    var email  = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var repassword = document.getElementById('repassword').value;
    var msg1 = document.getElementById('msg1');
    var msg2 = document.getElementById('msg2');
    var msg3 = document.getElementById('msg3');
    var msg4 = document.getElementById('msg4');
    if(fullName == "") {
        msg1.textContent = "Full name cannot be empty";
        return false;
    }
    var abc = /^[A-Z][a-z]+\s[A-Z][a-z]+$/;
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
    if(password ==""){
        msg3.textContent = "Password cannot be empty";
        return false;
    }
    if (password.length<=8) {
    msg3.textContent = "Password is too short";
    return false;
  }
  else {
    msg3.textContent = "";
   }
    if(repassword == ""){
        msg4.textContent = "Confirm password cannot be empty";
        return false;
    }
    if (repassword != password) {
    msg4.textContent = "Passwords does not match.";
    return false;
    }
    else{
        msg4.textContent = "";
        return true;
    }
}
