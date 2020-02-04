 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Information homestays</title>
        
        <link rel="stylesheet" href="../css/UserRegistrationTable.css"/>
        
        <style>

            @import url('https://fonts.googleapis.com/css?family=Raleway');

        </style>
    </head>
    <body>





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





    $sql = "select * from culture";
   $result = mysqli_query($conn,$sql);?>
   <a href="addculture.php">ADD information</a>
   
        <table class = "content-table" >
        <thead>
        <tr>
            <th>cul_id</th>
            <th>description</th>
            <th>culture</th>
            <th>image</th>
            <th> delete</th>


        </tr>
      </thead>

        <?php while($row = mysqli_fetch_array($result))
       { 
          $num=$row['cul_id'];
          ?>
          <tbody>
          <tr>
               <td><?php echo $num;?></td>
               
               <td><?php echo $row['description'];?></td>
               <td><?php echo $row['ethnicity'];?></td>


               <td><img src="<?php echo $row['cul_image']; ?>"></td>
              

               <td> <a href="changeculture.php?id=<?php echo $num?>">Delete</a></td>


            </tr>
            </tbody>





         
  <?php }
    ?>
    </table>
</body>

</html>