        <?php
        require 'connection.php';

        if(isset($_POST['submit'])){
            $fullname=$_POST['fullName'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $repassword =$_POST['repassword'];
            //$hashedpass =md5($password);
            $contact=$_POST['contact'];
            
            
            if ($password!== $repassword) {
			echo "password incorrect";
			exit();
            }
            $hashedPwd = md5($password);
            //$host ='host';
            $sql = "INSERT INTO users (idUsers,uidUsers,emailUsers,pwdUsers,type,contact_num)VALUES('','$fullname','$email','$hashedPwd','host','$contact')";
            
            $query = "select emailUsers from users where emailUsers='$email'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){
                header("Location:../../homestayform1.php");
                //MESSAGE HAS TO BE SENT TO REDIRECTED PAGE
//                echo "<p style='color:red;'>Email already exists</p>";
//                echo '<script type ="text/javascript">document.write(Email already exists);</script> ';
                exit();
            }
            if(mysqli_query($conn,$sql)){
                $last_id = mysqli_insert_id($conn);
                header("Location:../../homestayform2.php?val=$last_id"); 
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
