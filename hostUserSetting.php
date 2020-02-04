<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change password</title>
    <link rel="stylesheet" href="src/css/changepassword.css">
    <style>

    @import url('https://fonts.googleapis.com/css?family=Raleway');

</style>
</head>
<body>
   <div class="formclass">
         <h2>Update Password</h2>
         <form method ="" action="" onsubmit="return validateForm()">
           <label for="Current Password">
			     Current Password</label><input type ="password" name="previous-password" id="previous-password" placeholder="Enter Current Password" onkeyup="return validateForm()">
          <span id ="msg1" style="color: red;"></span><br>
           <label for="New Password">
			     New Password</label><input type ="password" name="new-password" id="new-password" placeholder="Enter New Password" onkeyup = "return validateForm()">
           <span id ="msg2" style="color: red;"></span><br>
           <label for="Confirm Password">
			     Confirm Password</label><input type ="password" name="password-confirm" id="password-confirm" placeholder="Confirm Password" onkeyup="return validateForm()">
           <span id ="msg3" style="color: red;"></span><br>
           <button type="submit" name= "submit" >Submit</button><br>
		</form>

    </div>
    <nav>
<div id="mySidenav" class="sidenav">
  <div class="logo">Logo</div>
  <ul>
      <li><a href="host.php" class="btn">Home</a></li>
      <li><a href="hostBookingDetails.php" class="btn">Booking Details</a></li>
      <li><a href="hostUserSetting.php" class="btn active">User Setting</a></li>
      <li><a href="hostImage.php" class="btn">Image Setting</a></li>
      <li><a href="hostDetails.php" class="btn">Change Details</a></li>
      <li><a href="hostReviewRatings.php" class="btn" >Review and Ratings</a></li>
  </ul>
</div>
</nav>
    <script type="text/javascript">
        // Add active class to the current button (highlight it)
var header = document.getElementById("mySidenav");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
        function validateForm()
        {
            var current = document.getElementById('previous-password').value;
            var new1 = document.getElementById('new-password').value;
            var confirm = document.getElementById('password-confirm').value;
            var msg1 = document.getElementById('msg1');
            var msg2 = document.getElementById('msg2');
            var msg3 = document.getElementById('msg3');
            if(current == "") {
                msg1.textContent = "Field cannot be empty";
                return false;
            }
            else{
                msg1.textContent = "";
                }
            if(new1 == "") {
                msg2.textContent = "Field cannot be empty";
                return false;
            }
            else{
                msg2.textContent = "";
                }
            if(confirm == "") {
                msg3.textContent = "Field cannot be empty";
                return false;
            }
            else{
                msg3.textContent = "";
                }
            if (confirm!= new1) {
                msg3.textContent = "Passwords does not match.";
                return false;
            }
            else{
                msg3.textContent = "";
                return true;
            }
        
        }
    
    </script>
</body>
</html>