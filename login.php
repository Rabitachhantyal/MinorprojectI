<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="src/css/login.css"/>
    <style>

    @import url('https://fonts.googleapis.com/css?family=Raleway');

</style>
<script type="text/javascript" src="src/js/login.js"></script>
</head>
<body>
  <div class="loginbox">
  <img src="src/image/user.png" class="usericon"/>
   <h1>
       Login
   </h1>
   
     <form method="post" onsubmit="return validateForm()">
      <div class="inputbox">
          <label for="email">
               Email
           </label>
          <input type="text" name="mailuser" id="email" placeholder="Enter email" onkeyup="return validateForm()">
          <span id="msg1" style="color: red;"></span>
       </div>
       <div class="inputbox">
           <label for="password">
               Password
           </label>
           <input type="password" name="password" id="password" placeholder="Enter password" onkeyup="return validateForm()">
           <span id="msg2" style="color: red;"></span>
        </div>
       <br>
       <input type="checkbox" name="check" id="checkbox">
        <label for="remember">Remember me</label>
       <br>
       <!--<a href="#" class="forgotPassword" id="forgotPassword">Forgot Password?</a> -->
        <input type="submit" name="login-submit" id="submit" value="Login" formaction="src/includes/login.inc.php">
        <br>
        <div class="donot"><p>Do not have an account? <a href="register.php">Register</a>.</p></div>
        </form>
    </div>
        <div class="popup">
         <div class="formclass">
         
         <h2>Please Submit your Email address</h2>
         <form action="forgotpassword" method ="post" onsubmit="return validateMail()">
           <label for="Email">
			     Email<input type ="text" name="mail" placeholder="Enter Email" onkeyup="return validateMail()" id="mail">
           </label>
           <span id ="msg" style="color: red;"></span><br>
           <button type="submit" name= "submit" id="submit1" onsubmit="return validateMail()">Submit</button><br>
		</form>
    <div class="close" id="close">+</div>

    </div>
    </div>
    <script type="text/javascript">
      document.getElementById('forgotPassword').addEventListener('click',function(){
          document.querySelector('.popup').style.display='block';
          
      });
      document.getElementById('close').addEventListener('click',function(){
          document.querySelector('.popup').style.display='none';
      });   
        
    function validateMail()
        {
            var mail = document.getElementById('mail').value;
            var submit1 = document.getElementById('submit1');
            var msg = document.getElementById('msg');
            if(mail == "") {
        msg.textContent = "Email cannot be empty";
        return false;
    }
     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(mail)){
    msg.textContent="Enter valid Email.";      
    return false;
    }
    else{
        msg.textContent = "";
        submit1.addEventListener('click',function(){
          alert('Link has been sent to your email');
      });
        
    }
      return true;      
    }
        
</script>
</body>
</html>