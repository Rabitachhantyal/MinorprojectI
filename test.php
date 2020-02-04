<?php
// require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

		$servername = "localhost";
		$dBUsername = "root";
		$dBPassword = "";
		$dBName ="ruralstay";
		$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
		if (!$conn) {
			die("Connection failed:".mysqli_connect_error());
		
		
	}

  	$name = mysqli_query($conn,"SELECT ch_name FROM community_homestay where ch_reg_num = '1' ");
  	while($row=mysqli_fetch_assoc($name)){
  		echo $row['ch_name'];
  	}

	?>