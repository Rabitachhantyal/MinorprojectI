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
     if(isset($_GET["id"]))
{
    $did = $_GET["id"];
    $sqli = "delete from culture where cul_id='$did'";
    $result1 = mysqli_query($conn,$sqli);
    if(!$result1)
    {
      echo("delete unsuccessfull");
    }
    else
    {
     header("refresh:1;changeculture.php");
    }
 }





    $sql = "select * from culture,culture_slide where culture.cul_id = culture_slide.cul_id";
   $result = mysqli_query($conn,$sql);?>
   <a href="addculture.php">ADD information</a>
   
    <table style="width:100%" border = "1">
        <tr>
            <th>cul_id</th>
            <th>description</th>
            <th>culture</th>
            <th>image</th>
            <th> delete</th>


        </tr>

        <?php while($row = mysqli_fetch_array($result))
       { 
          $num=$row['cul_id']
          ?>
      
          <tr>
               <td><?php echo $num;?></td>
               
               <td><?php echo $row['description'];?></td>
               <td><?php echo $row['ethnicity'];?></td>


               <td><img src="<?php echo $row['image']; ?>"></td>
              

               <td> <a href="changeculture.php?id=<?php echo $num?>">Delete</a></td>


            </tr>





         
  <?php }
    ?>
    </table>
</body>

</html>