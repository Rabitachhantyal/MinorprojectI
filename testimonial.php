<?php 
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="ruralstay";
$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
  die("Connection failed:".mysqli_connect_error());
  
  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

 <?php 

     $sql = "select * from testimonial";
   $result = mysqli_query($conn,$sql);?>
    <table style="width:100%" border = "1">
        <tr>
            <th>t_id</th>
            <th>username</th>
            <th>testimonial</th>

        </tr>
         <?php while($row = mysqli_fetch_array($result))
          { ?>
      
          <tr>
               <td><?php echo $row['t_id'];?></td>
               <td><?php echo $row['username'];?></td>
               <td><?php echo $row['testimonial'];?></td>

          </tr>

         <?php } ?>


        </table>
    </body>
    </html>