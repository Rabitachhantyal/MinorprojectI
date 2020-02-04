
     <?php
    require"connection.php";

    if(isset($_POST['submit'])){
        $checkIn = $_POST['checkIn'];
        $checkOut = $_POST['checkOut'];
        $reg_num = $_GET['value'];
        
        $sql = "select checkin,checkout from reservation where ch_reg_num='$reg_num'";
        $result=mysqli_query($conn,$sql);
        if($result){
            while($field=mysqli_fetch_assoc($result)){
                if($checkIn>=$field['checkin'] && $checkOut<=$field['checkout']){
                    echo"<p style'color:red;>'Unavailable.Select another dates.</p>";
                    exit();
                }   
                else{
                   header("Location:../../Booking.php?value=".$reg_num);  
                }
            }
           
        }
        else{
            header("Location:../../homestaypage.php?value=".$reg_num); 
        }
    }
header("Location:../../Booking.php?value=".$reg_num."&value2=".$checkIn."&value3=".$checkOut);
//header("Location:../../Booking.php");
    
?>