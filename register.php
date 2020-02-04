<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form</title>
    <link rel="stylesheet" type = "text/css" href="src/css/register.css"/>
    <style>

    @import url('https://fonts.googleapis.com/css?family=Raleway');

</style>
<script type="text/javascript" src="src/js/register.js"></script>
    
</head>
<body>	
 <div class="registrationbox">
  <h1>Registration</h1>
  <img src="src/image/register.png" class="registrationicon"/>
   <form action="src/includes/signup.inc.php" method="post" id="myForm" onsubmit="return validateForm()" novalidate >
      <label for="fullName">Full Name</label>
          <input type="text" name="uid" id="fullName" placeholder="Enter full name" onkeyup = "return validateForm()" >
      <span id ="msg1" style="color: red;"></span><br>
      <label for="email">Email</label>
      <input type="text" name="mail" id="email" placeholder="Enter email" onkeyup = "return validateForm()" >
      <span id ="msg2" style="color: red;"></span><br>
      <label for="password">Password </label>
         <input type="password" name="pwd" id="password" placeholder="Enter Password" onkeyup = "return validateForm()" >
        <span id ="msg3" style="color: red;"></span><br>
        <label for="repassword">Confirm Password</label>
        <input type="password" name="pwd-repeat" id="repassword" placeholder="Confirm Password" onkeyup ="return validateForm()" >
       <span id ="msg4" style="color: red;"></span><br>
<!--
       <br>
           <input type="radio" name="user" id="userid"><label for="user"> User</label><br>
            <input type="radio" name="user" id="homestay"><label for="user">Homestay Owner</label>
        <br>
-->

     <button type="submit" name="signup-submit" id="submit"  >Register</button><br>
     <div class="already"><p>Already have an account? <a href="login.php">Sign in</a>.</p></div> 
   </form>

  </div>
  <!--
  <div class="popup">
     <div class="formclass">
         <h1>Homestay Description</h1>
         <form method ="post">	 for image upload
           <label for="">
			     Homestay Name<input type ="text" name="home-name" placeholder="Homestay Name">
           </label><br>
            <label for="">
			     Registration Number<input type ="text" name="reg-num" placeholder="Registration Number">
			</label><br>
			<label for="">
			     Culture<input type ="text" name="ethnicity" placeholder="Culture">
			</label><br>
			<label for="">
			     Phone Number<input type ="tel" name="phn-num" placeholder="Phone Number">
			</label><br>
			<label for="">
			     Address<input type ="text" name="address" placeholder="Address">
			</label><br>
			<label for="">
			    Description
			</label><br>
			<textarea rows="4" cols="50" placeholder="Write about homestay"></textarea><br>
			
-->
<!--
			<label for="">
			    Upload Certificate<input type ="file" name="certificate-img" accept = ".jpg,.jpeg,.png" ></label><br> acccept only jpg, jpeg and png 
-->
<!--
			    <button type="submit" name= "register-submit">Register</button><br>
			    <input type = "reset" name = "reset" value = Reset><br>
		</form>
    <div class="close">+</div>
     </div>
      
  </div>

<!--
  <script type="text/javascript">
      document.getElementById('homestay').addEventListener('click',function(){
          document.querySelector('.popup').style.display='block';
          
      });
      document.querySelector('.close').addEventListener('click',function(){
          document.querySelector('.popup').style.display='none';
      });
    
    </script>
-->
   
</body>
</html>
































