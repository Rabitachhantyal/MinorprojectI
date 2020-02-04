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
    $sqli = " UPDATE community_homestay SET status = 1 WHERE  ch_reg_num='$did'";
    $result1 = mysqli_query($conn,$sqli);
    if(!$result1)
    {
      echo("delete unsuccessfull");
    }
    else
    {
     header("refresh:1;mailtohost.php");
    }
 }





    $sql = "select * from community_homestay";
   $result = mysqli_query($conn,$sql);?>
    <table style="width:100%" border = "1">
        <tr>
            <th>ch_id</th>
            <th>homestay registration num</th>
            <th>homestay name</th>
            <th>ethnicity</th>
            <th>email</th>
            <th>registration date</th>
            <th>total homes</th>
            <th>total rooms  </th>
            <th>total families</th>
            <th>certificate</th>
            <th>activate </th>

        </tr>

        <?php while($row = mysqli_fetch_array($result))
       {  
          $status =$row['status'];
          $num =$row['ch_reg_num'];

          
          if($status==0){?>
      
          <tr>
               <td><?php echo $row['ch_id'];?></td>
               <td><?php echo $num;?></td>
               <td><?php echo $row['ch_name'];?></td>
               <td><?php echo $row['ch_ethnicity'];?></td>
               <td><?php echo $row['ch_email'];?></td>
               <td><?php echo $row['ch_reg_date'];?></td>
               <td><?php echo $row['ch_total_houses'];?></td>
               <td><?php echo $row['ch_total_rooms'];?></td>
               <td><?php echo $row['ch_total_families'];?></td>
               <td><?php echo $row['ch_certificate'];?></td>
               <td> <a href="pendinghomestay.php?id=<?php echo $num?>">Approve</a></td>


            </tr>

         
  <?php }}
    ?>
    </table>
</body>

</html>