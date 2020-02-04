<?php
if (isset($_POST['register-submit'])) {

	require 'db.php';
	
	$culture = $_POST['ethnicity'];

	$image_name = $_FILES['certificate-img']['name']; //name of file stored in image_name
	$image_size = $_FILES['certificate-img']['size'];
	//size of file stored in image_size
	$image_tmp = $_FILES['certificate-img']['tmp_name'];


	$directory = 'uploads/'; //image upload in server will store in uploads folder
	$target_file = $directory.$image_name;

	if (empty($culture) ) {
			echo "Empty field";
			exit();
		}
		else{
			move_uploaded_file($image_tmp,$target_file); //takes the temporary image stored at temporary location to the target file
			$sql = "insert into homepage(id,photo,culture) values('','$target_file','$culture')";
			$result = mysqli_query($conn,$sql);

			if($result)
			{
				echo "<script>alert('Success!');</script>";
			}
			else
			{
				echo "<script>alert('Unsuccessfull!');</script>";
			}
			
		}
}
?>

<main>
<h1>Register form for homestay</h1>

	<form method ="post" enctype="multipart/form-data">	<!-- for image upload-->
		
			<input type ="text" name="ethnicity" placeholder="Culture">
			

			<input type ="file" name="certificate-img" accept = ".jpg,.jpeg,.png" > <!--acccept only jpg, jpeg and png -->
			<button type="submit" name= "register-submit">Register</button>
			<input type = "reset" name = "reset" value = Reset>
		</form>

</main>