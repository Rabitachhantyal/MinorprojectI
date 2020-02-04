<?php
require"connection.php";


if(isset($_POST['submit'])){
    $introduction = $_POST['introduction'];
    $aboutPlace = $_POST['aboutPlace'];
    $climate = $_POST['climate'];
    $aboutHost = $_POST['aboutHost'];
    $facilities = $_POST['facilities'];
    $cost = $_POST['cost'];
    $reg_num = $_GET['value'];
    
    $image_name = $_FILES['image']['name']; //name of file stored in image_name
	$image_size = $_FILES['image']['size'];
	//size of file stored in image_size
	$image_tmp = $_FILES['image']['tmp_name'];

	$directory = '../image/cover-photo'; //image upload in server will store in uploads folder
	$target_file = $directory.$image_name;
    
    $sql = "insert into community_homestay_description(ch_reg_num,desc_intro,desc_about_place,desc_climate,desc_about_host,desc_facilities,cost_per_guest_per_night)values('$reg_num','$introduction','$aboutPlace','$climate','$aboutHost','$facilities','$cost');";
    $sql2 = "insert into community_homestay_images(image_id,ch_reg_num,images_path)values('','$reg_num','$target_file');";
    
    if(mysqli_query($conn,$sql)){
        if(mysqli_query($conn,$sql2)){
            header("Location:../../ThankHost.php");
        }
    }
    else{
        header("Location:../../details.php?error=".mysqli_error($conn));
    }   
}
else{
    header("Location:../../details.php?error=".mysqli_error($conn));
}
?>