<?php
require "src/includes/connection.php";
//$uidUsers;
//$emailUsers;
//$name;
//$contact;

 $last_id = $_SESSION['res_id'];  

            //session_start();

/*$sql0 ="select * from reservation";
$result = mysqli_query($conn,$sql0);
$row0 = mysqli_fetch_array($result);
$last_id = $row0['reservation_id'];
echo "$last_id"; */




            $sql="select uidUsers,emailUsers from users where idUsers in(select idUsers from reservation where reservation_id='$last_id')";

			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
				$uidUsers = $row['uidUsers'];

				$emailUsers = $row['emailUsers'];


		$sql2="select ch_name from community_homestay where ch_reg_num in(select ch_reg_num from reservation where reservation_id='$last_id')";
			$result=mysqli_query($conn,$sql2);
			$row1=mysqli_fetch_assoc($result);
			$name = $row1['ch_name'];

$sql3="select idUsers from host where ch_reg_num in(select ch_reg_num from reservation where reservation_id='$last_id')	";
			$result=mysqli_query($conn,$sql3);
			$row2=mysqli_fetch_assoc($result);
				$idUsers=$row2['idUsers'];
$sql4="select contact_num from users where idUsers = '$idUsers'";
				$result1=mysqli_query($conn,$sql4);

			
			$row3=mysqli_fetch_assoc($result1);
			$contact = $row3['contact_num'];

			$Subject = "Hello". $uidUsers;
			$Body    = "Your booking has been successfull. The contact number of". $name."is". $contact;
			//$AltBody = 'This is the body in plain text for non-HTML mail clients';
			$Header = "RuralStay";
			
			if(!mail($emailUsers,$Header,$Body,$Subject)){
				echo "error in email sending".mysqli_error();
			}
			

?>
