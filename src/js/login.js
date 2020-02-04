function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var msg1 = document.getElementById('msg1');
    var msg2 = document.getElementById('msg2');
    
    if(email == "") {
        msg1.textContent = "Email cannot be empty";
        return false;
    }
//     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//    if(!re.test(email)){
//    msg1.textContent="Enter valid Email.";       
//    return false;
//    }
    else{
        msg1.textContent = "";
    }
    if(password ==""){
        msg2.textContent = "Password cannot be empty";
        return false;
    }
  else {
    msg2.textContent = "";
      return true;
   }
    
}