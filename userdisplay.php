<?php 
require 'src/includes/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
 
    
 <?php 
     if(isset($_GET["id"]))
{
    $did = $_GET["id"];
    $sqli = "delete from users where idUsers='$did'";
    $result1 = mysqli_query($conn,$sqli);
    if(!$result1)
    {
      echo("delete unsuccessfull");
    }
    else
    {
     header("refresh:1;userdisplay.php");
    }
 }

     $sql = "select * from users";
   $result = mysqli_query($conn,$sql);?>
    <table style="width:100%" border = "1">
        <tr>
            <th>idUsers</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>type</th>
            <th>contact </th>
            <th>delete</th>

        </tr>
         <?php while($row = mysqli_fetch_array($result))
          { 
        $num =$row['idUsers'];
        
        ?>
      
          <tr>
               <td><?php echo $row['idUsers'];?></td>
               <td><?php echo $row['uidUsers'];?></td>
               <td><?php echo $row['emailUsers'];?></td>
               <td><?php echo $row['pwdUsers'];?></td>
               <td><?php echo $row['type'];?></td>
               <td><?php echo $row['contact_num'];?></td>
                  <td> <a href="userdisplay.php?id=<?php echo $num?>">Delete</a></td>

          </tr>

         <?php } ?>


        </table>
    </body>
    </html>