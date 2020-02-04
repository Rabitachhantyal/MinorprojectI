<?php
/*session_start();
if(isset($_SESSION['userId']))
{
    if($_SESSION['type']="user")
    {
        header("Location:../../homepage.php");
        exit();
    }
    elseif($_SESSION['type']="host")
    {
        header("Location:../../homestayform1.php");
    }
}
*/


if(isset($_POST['login-submit'])){
    require 'connection.php';
    
    $userMail = $_POST['mailuser'];
	$password = $_POST['password'];
	$hashPassword = md5($password);
    if(empty($userMail) || empty($password)){
		echo "Field are empty.Fill up the field!!";
		exit();
	}
    $sql = "SELECT * FROM users WHERE emailUsers='$userMail' AND pwdUsers='$hashPassword'"; 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
         if($userMail == $row['emailUsers']){
             if($hashPassword == $row['pwdUsers']){
                 if($row['type']='user'){
                    session_start();
                    $_SESSION['userId'] =$row['idUsers']; //$row['user_id'];
                    //$_SESSION['type']  =$row['type'];
                    header("Location:../../homepage.php");
                     
                 }elseif($row['type']='host'){
                        session_start();
						$_SESSION['userId'] =$row['idUsers']; //$row['user_id'];
                        //$_SESSION['type']  = $row['type'];
                            header("Location:../../homepage.php");
                            
                        }
                         else{
                        session_start();
				        $_SESSION['userId'] =$row['idUsers']; //$row['user_id'];
                        //$_SESSION['type']  = $row['type'];
                        header("Location:../../homepage.php");
                            }
                 
                         //if(!empty($_POST["check"])) {   // if remember me clicked . Values will be stored in $_COOKIE  array

						//setcookie ("emailUsers",$userMail,time()+ (10 * 365 * 24 * 60 * 60));//COOKIES for username

						//setcookie ("pwdUsers",$password,time()+ (10 * 365 * 24 * 60 * 60));//COOKIES for password
                
                      //}
                           //else{
							//setcookie("emailUsers","",time()-(10 * 365 * 24 * 60 * 60)); //empty/delete the cookie
							//setcookie("pwdUsers","",time()-(10 * 365 * 24 * 60 * 60));
						//}
             
                      
                        
                            
             }
             
             
         
             }   
            
            
            
        }
 
        
        
        
    }    else{
						//header("Location:../../login.php");
        echo 'error'.mysqli_error($conn);
						
        exit();

        }
        
    
}
    else{
	
	echo "Error in login";
	exit();
}
?>























