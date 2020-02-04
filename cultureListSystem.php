<?php
require "src/includes/connection.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>
      Culture list
   </title>
   <link rel="stylesheet" type="text/css" href="src/css/culturelist.css" />
   <style>
      @import url('https://fonts.googleapis.com/css?family=Raleway');

   </style>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
      <?php       
      include 'nav.php';
   ?> 
   <h2>Cultures' List</h2>
   <div class="flexcontainer" style=" margin: 10px;width: 1500px;display: flex;flex-direction: row;
    flex-wrap: wrap;">
      <?php
$sql="select * from culture limit 8";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){ ?>

      <a href="culturepage.php?value=<?php echo $row['cul_id']?>&value1=<?php echo $row['ethnicity']?>">
         <div class="culturebox">
            <div class="imgBox">
               <img src="<?php echo $row['cul_image'];?>" />
            </div>
            <div class="overlay">
               <div class="text"><?php echo $row['ethnicity'];?></div>
            </div>
         </div>
      </a>
      <?php } ?>
   </div>

   <footer>
      <div class="foot">
         <label for="Company">Company</label>
         <a href="#">About</a>
         <a href="Homepage.php">Home</a>
      </div>

      <label>Connect with us</label>
      <div class="icons">
         <a href="#"><img src="src/image/facebook2.png" /></a>
         <a href="#"><img src="src/image/instagramlogo.png" /></a>
      </div>
   </footer>
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
</body>

</html>
