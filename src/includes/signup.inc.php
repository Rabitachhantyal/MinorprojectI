












        <?php
        require 'connection.php';

        if(isset($_POST['signup-submit'])){
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password =$_POST['pwd'];
        $passwordRepeat =$_POST['pwd-repeat'];

            
            
            if ($password!== $passwordRepeat) {
			echo "password incorrect";
			exit();
            }
            $hashedPwd = md5($password);
           
            $sql = "INSERT INTO users (idUsers,uidUsers,emailUsers,pwdUsers,type)VALUES('','$username','$email','$hashedPwd','user')";
            
            $query = "select emailUsers from users where emailUsers='$email'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){
                header("Location:../../register.php");
                //MESSAGE HAS TO BE SENT TO REDIRECTED PAGE
//                echo "<p style='color:red;'>Email already exists</p>";
//                echo '<script type ="text/javascript">document.write(Email already exists);</script> ';
                exit();
            }
            if(mysqli_query($conn,$sql)){
               header("Location:../../login.php"); 
            }
            else{
                echo "Error: ". mysqli_error($conn);
            }
        }
        else{
            //header("Location:../homestayform1.php?error:counldn't process");
            echo 'error:'. mysqli_error($conn);
        }
        ?>