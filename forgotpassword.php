<?php
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

if (isset($_POST['submit'])) {
	
	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName ="ruralstay";
	$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
	if (!$conn) {
		die("Connection failed:".mysqli_connect_error());
		
		
	}
    $email = $_POST['mail'];
		if(empty($email))
		{
			$msg="Please enter your email";
			
		}
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$msg ="please enter valid email";
			
		}
		  	$sql = "SELECT * FROM users WHERE emailUsers='$email'";
  	
		  	$res = mysqli_query($conn, $sql);

		  	if (mysqli_num_rows($res) > 0) 
		{

			$random ="ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
			$password= substr(str_shuffle($random),0,8);
			$hashedPwd = md5($password);
			if (mysqli_query($conn,"UPDATE users SET pwdUsers='$hashedPwd' WHERE emailUsers ='$email'")){

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 3;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'ruralstayProject@gmail.com';                 // SMTP username
			$mail->Password = 'rural_12345';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('ruralstayProject@gmail.com');
			$mail->addAddress($email);     // Add a recipient
			               
			//$mail->addReplyTo('info@example.com', 'Information');


			$mail->isHTML(true);                                  // Set email format to HTML

			$url = 'http://'.$servername.'/UpdateRural/RuralStay/login.php';

			$output = '<div> To change password in your way copy that random password and click this link <br>'.$url.' </div>';
			$mail->Subject = 'Here is the subject';
			$mail->Body    = '<p>Here is your  <b>New Password</b> '.$password.'
			<br> <br> <br> <br> <br> <br> <br> <br> <br> '.$output.'
			</p>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: '. $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}

		    	//echo "password changed successfully";
		    	//echo $password;
		    	
		    }
		    else{
		    	echo "unsuccessful";
		    	exit();
		    }	
		}
		else{
			echo "email doesn't exist";
			exit();
		}
	
	
}
		


			


?>
<h1>Forgot password</h1>
<form  method ="post">
	<input type="text" name="mail" placeholder="Email">
	
	<button type = "submit" name="submit">Submit</button>
</form>

	


