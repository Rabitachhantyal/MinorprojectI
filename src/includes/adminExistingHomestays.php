    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Existing homestays</title>
       
        <link rel="stylesheet" href="../css/UserRegistrationTable.css"/>
        
        <style>

            @import url('https://fonts.googleapis.com/css?family=Raleway');

        </style>
    </head>
    <body>
    
    <script type="text/javascript">
      
        // Add active class to the current button (highlight it)
            var header = document.getElementById("mySidenav");
            var btns = header.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
              });
            }
     </script>


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
    $sqli = "delete from community_homestay where ch_reg_num='$did'";
    $result1 = mysqli_query($conn,$sqli);
    if(!$result1)
    {
      echo("delete unsuccessfull");
    }
    else
    {
     header("refresh:1;adminExistingHomestays.php");
    }
 }





    $sql = "select * from community_homestay";
   $result = mysqli_query($conn,$sql);?>
    <table class = "content-table" >
        <thead>
        <tr>
            <th>ch_id</th>
            <th>homestay registration num</th>
            <th>homestay name</th>
            <th>ethnicity</th>
            
            <th>registration date</th>
            <th>total homes</th>
            <th>total rooms  </th>
          
            <th>certificate</th>
            <th>delete </th>

        </tr>
        </thead>

        <?php while($row = mysqli_fetch_array($result))
       {  
          $status =$row['status'];
          $num =$row['ch_reg_num'];

          
          if($status==1){?>
          <tbody>
          <tr>
               <td><?php echo $row['ch_id'];?></td>
               <td><?php echo $num;?></td>
               <td><?php echo $row['ch_name'];?></td>
               <td><?php echo $row['ch_ethnicity'];?></td>
               
               <td><?php echo $row['ch_reg_date'];?></td>
               <td><?php echo $row['ch_total_houses'];?></td>
               <td><?php echo $row['ch_total_rooms'];?></td>
              
               <td><?php echo $row['ch_certificate'];?></td>
               <td> <a href="adminExistingHomestays.php?id=<?php echo $num?>">Delete</a></td>


            </tr>
            </tbody>

         
  <?php }}
    ?>
    </table>
</body>

</html>





