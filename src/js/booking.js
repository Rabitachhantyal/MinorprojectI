function validateBook() {
    var checkIn = document.getElementById('checkIn').value;
    var checkOut = document.getElementById('checkOut').value;
    var msg1 = document.getElementById('msg1');
    var msg2 = document.getElementById('msg2');
    var book = document.getElementById('book');
    if(checkIn == "") {
        msg1.textContent = "Field cannot be empty";
        return false;
    }
    var date = new Date();
    var ci = new Date(checkIn);
    if(ci<=date)
        {
            msg1.textContent = "Enter valid date";
            return false;
        }
     else{
        msg1.textContent = "";
    }
    
    if(checkOut ==""){
        msg2.textContent = "Field cannot be empty";
        return false;
    }
    var cout = new Date(checkOut);
    if(cout<=ci)
        {
            msg2.textContent = "Enter valid date";
            return false;
        }
  else {
    msg2.textContent = "";
      return true;
       book.addEventListener('click',function(){
          alert('Link has been sent to your email');
      });
        
   }
}


 
//function CheckDate(input)
//{
//    
//    //var validformat=/^\d{2}\/\d{2}\/\d{4}$/; //Basic check for format validity
//    var returnval=false;
//    try 
//    {
//        if (typeof input === "string") 
//        {
//            var monthfield=input.split("/")[0];
//            var dayfield=input.split("/")[1];
//            var yearfield=input.split("/")[2];
//        }
//        var dayobj = new Date(yearfield, monthfield-1, dayfield);
//        if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
//            alert("Invalid Day, Month, or Year range detected. Please correct and submit again.");
//        else
//            returnval=true;
//    }catch (err) 
//    {
//        print("Invalid Date Format. Please correct and submit again.");
//    }
//    if (returnval==false && typeof input === "object") 
//        input.select();
//    return returnval;
//}
//    var checkIn = document.getElementById('checkIn').value;
//    var checkOut = document.getElementById('checkOut').value;
//    var date = new Date();
//if CheckDate(checkIn <= date)
//    {
//        return false;
//    }
//    else{
//        return true;
//    }
//alert("Thank you for booking");
