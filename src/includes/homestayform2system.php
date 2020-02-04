<?php
include"connection.php";

if(isset($_POST['submit'])){
    $name = $_POST['homestay'];
    $province = $_POST['Province'];
    $zone = $_POST['Zone'];
    $district = $_POST['District'];
    $municipality = $_POST['municipality'];
    $ward = $_POST['ward'];
    $village = $_POST['village'];
    $total_house = $_POST['thouse'];
    $total_rooms = $_POST['trooms'];
    $ethnicity = $_POST['Ethnicity'];
    $reg_num = $_POST['registrationNumber'];
    $idUsers = $_GET['value'];
    
    $timeZone = date_default_timezone_get();
    date_default_timezone_set($timeZone);
    $date = date('Y/m/d',time());
    
	$image_name = $_FILES['certificate']['name']; //name of file stored in image_name
	$image_size = $_FILES['certificate']['size'];
	//size of file stored in image_size
	$image_tmp = $_FILES['certificate']['tmp_name'];

	$directory = '../image/certificate'; //image upload in server will store in uploads folder
	$target_file = $directory.$image_name;
    move_uploaded_file($image_tmp,$target_file); //takes the temporary image stored at temporary location to the target file
    
    $sql = "insert into community_homestay(ch_id,ch_reg_num,ch_name,ch_ethnicity,ch_reg_date,ch_total_houses,ch_total_rooms,ch_certificate)values('','$reg_num','$name','$ethnicity','$date','$total_house','$total_rooms','$target_file');";
    $sql2 = "insert into community_homestay_address(ch_reg_num,ch_provision,ch_zone,ch_district,ch_municipality,ch_place_name,ch_ward_num)values('$reg_num','$province','$zone','$district','$municipality','$village','$ward');";
    $sql3 = "insert into host(idUsers,ch_reg_num)values('$idUsers','$reg_num');";
    
    if(mysqli_query($conn,$sql)){
        if(mysqli_query($conn,$sql2)){
            if(mysqli_query($conn,$sql3)){
                header("Location:../../details.php?value=".$reg_num);
            }
        }        
    }
    else{
        header("Location:../../homestayform2.php?error=".mysqli_error($conn));
    }
    
    
}
