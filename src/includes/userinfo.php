 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Pending homestays</title>
        
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
    $sqli = "delete from users where idUsers='$did'";
    $result1 = mysqli_query($conn,$sqli);
    if(!$result1)
    {
      echo("delete unsuccessfull");
    }
    else
    {
     header("refresh:1;userinfo.php");
    }
 }

     $sql = "select * from users";
   $result = mysqli_query($conn,$sql);?>
     <table class = "content-table" >
        <thead>
        <tr>
            <th>idUsers</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>type</th>
            <th>contact </th>
            <th>delete</th>

        </tr>
      </thead>
         <?php while($row = mysqli_fetch_array($result))
          { 
        $num =$row['idUsers'];
        
        ?>
          <tbody>
          <tr>
               <td><?php echo $row['idUsers'];?></td>
               <td><?php echo $row['uidUsers'];?></td>
               <td><?php echo $row['emailUsers'];?></td>
               <td><?php echo $row['pwdUsers'];?></td>
               <td><?php echo $row['type'];?></td>
               <td><?php echo $row['contact_num'];?></td>
                  <td> <a href="userinfo.php?id=<?php echo $num?>">Delete</a></td>

          </tr>
        </tbody>

         <?php } ?>


        </table>
    </body>
    </html>