<?php
if (isset($_POST['submit'])) {

	$servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName ="ruralstay";
    $conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
    if (!$conn) {
      die("Connection failed:".mysqli_connect_error());
    }

	$image_name = $_FILES['img']['name']; //name of file stored in image_name
	$image_size = $_FILES['img']['size'];
	//size of file stored in image_size
	$image_tmp = $_FILES['img']['tmp_name'];
    $directory = 'image/'; //image upload in server will store in uploads folder
	$target_file = $directory.$image_name;

	move_uploaded_file($image_tmp,$target_file); //takes the temporary image stored at temporary location to the target file
    $query ="select * from culture";
    $res = mysqli_query($conn,$query);
     while($row = mysqli_fetch_array($res))
       { 

       	$id = $row['cul_id'];



    $sql = "insert into culture_slide(ch_id,image) values ('$id','$target_file')";

    $result = mysqli_query($conn,$sql);

	if($result)
	{
	 echo 'Registered successfully  ';
	}
	else
	{
	echo 'Unsucessful';
	}
}


}










?>



<form method ="post" enctype="multipart/form-data">


	<input type ="file" name="img" accept = ".jpg,.jpeg,.png" > 
	<button type="submit" name= "submit">Submit</button>
</form>


