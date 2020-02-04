<?php
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

		$servername = "localhost";
		$dBUsername = "root";
		$dBPassword = "";
		$dBName ="ruralstay";
		$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
		if (!$conn) {
			die("Connection failed:".mysqli_connect_error());
		
		
	}
    	

  		$sql = "SELECT ch_email FROM community_homestay WHERE status= 1";
  	
  		$res = mysqli_query($conn, $sql)  or die( mysqli_error($conn));;
  		while($row = mysqli_fetch_array($res)) {

  			$email = $row['ch_email'];
  		

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

			$url = 'http://'.$servername.'/UpdateRural/RuralStay/index.php';

			$output = '<div> click this link <br>'.$url.' </div>';
			$mail->Subject = 'Here is the subject';
			$mail->Body    = '<p>You are approved.Please log in <br> <br> <br> <br> <br> <br> <br> <br> '.$output.'
			</p>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: '. $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}


	}
	
	

		


			


?>