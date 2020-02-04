<?php
session_start();
if (isset($_POST['change-submit'])) {
     $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName ="ruralstay";
    $conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
    if (!$conn) {
      die("Connection failed:".mysqli_connect_error());
  
  
}

  $old_password =$_POST['previous-password'];
  $new_password =$_POST['new-password'];
  $Confirm_password = $_POST['password-confirm'];
  $hash_oldpass = md5($old_password);

  $uid = $_SESSION['userId']; //uid store the userId through session while login
  if (empty($old_password)|| empty($new_password)|| empty($Confirm_password)) {
      echo "Empty fields";
      exit();
    }
  
  else if(!empty($uid)){    //check  whether userid is empty or not if not then

  $sql = "SELECT pwdUsers from users where idUsers = '$uid'"; //read user_password if user_id from database   and  userId from server matched

  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);


  if($hash_oldpass == $row['pwdUsers']){  //check password that entered by user and the password already present

    if($new_password == $Confirm_password){    //confirm new password
      $hash_newpass = md5($new_password);
      $query = "UPDATE users set pwdUsers ='$hash_newpass' WHERE idUsers = '$uid' "; //update password
      $out = mysqli_query($conn,$query); //execute update query

            if($out){
      echo 'change password successfully';
      }

    }
    else{
      echo 'new password doesnt match';
    }



    }
    else{
      echo 'oldpassword doesnt match';
    }
  }

  else{
  //echo 'You have to login first';
  header("Location: admin.php");
    }
}
?>