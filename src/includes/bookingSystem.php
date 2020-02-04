<?php
    require "connection.php";

    if (isset($_POST['book'])){
        $checkin = date('Y-m-d', strtotime($_POST['checkIn']));
        $checkout = date('Y-m-d', strtotime($_POST['checkOut']));
        $guest_num = mysqli_real_escape_string($conn,$_POST['guest_num']);
        $reg_num = $_GET['reg'];
        $total=$_POST['totalCost'];
        if($checkin == " " || $checkout == " " || $guest_num == " "){
           header("Location:../../Booking.php");
            exit();
        }
//        $dates = date("Y-m-d");
//        echo $dates;
        session_start();
        $idUser=$_SESSION['userId'];
        $sql = "INSERT INTO reservation (idUsers,ch_reg_num,checkin,checkout,total_guest,total_reservation_cost) VALUES ('$idUser','$reg_num','$checkin', '$checkout','$guest_num','$total');";
        
        if(mysqli_query($conn,$sql)){
            $last_id = mysqli_insert_id($conn);
            $_SESSION['res_id']=$last_id;
            require "../../mailtouser.php";
            header("Location:../../Thankyou.php");
        }
        
        else{
             echo "Error: " . $sql . "<br>" . mysqli_error();
        }
    }  
    
    else{
        header("Location:../../Booking.php?error:could not process");
    }
?>