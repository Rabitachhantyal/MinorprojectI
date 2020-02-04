<?php 
require "src/includes/connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/nav1.css">
    <style>
         @import url('https://fonts.googleapis.com/css?family=Raleway');
    </style>
</head>
<body>

<nav>
   <div class="logo">LOGO</div>
    <ul>
        <li><a href="homestaylist.php">HOMESTAYS</a></li>
        <li><a href="cultureListSystem.php">CULTURES</a></li>
        <li><a href="#">MY LISTS</a></li>
        <li><a href="#">ABOUT US</a></li>
<!--        <li><a href="homestayform1.php">ADD HOMESTAYS</a>-->

        <li class="dropdown"><a href="#">PROFILE</a>
              <ul class="submenu">
                <?php
                 $userId=$_SESSION['userId'];
                  $sql="select type from users where IdUsers='$userId'";
                  $sql2="select status from community_homestay where ch_reg_num in(select ch_reg_num from host where idUsers='$userId');";
                  $result=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_assoc($result)){
                      if($row['type']=="admin"){?>
                      <li><a href = "Admin.php">Dashboard</a></li>
                      <?php }
                      else if($row['type']=="user"){?>
                      <li><a href = "Changepassword.php">Dashboard</a></li>
                      <?php }
                      else if($row['type']=="host"){
                      $result=mysqli_query($conn,$sql2);
                      while($row1=mysqli_fetch_assoc($result)){
                          if($row1['status']==1){?>
                               <li><a href = "host.php">Dashboard</a></li> 
                          <?php }
                      }
                  ?>
                    
                      <?php } 
                      }?>
          				
          		    <li> <a href="src/includes/logout.inc.php">Logout</a></li>
          			</ul>
        </li>
    </ul>
    </nav>
    















