<?php
require "src/includes/connection.php";?>

<!DOCTYPE html>
<html>

<head>
  <title>Cultural Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/culturepage.css">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway');

  </style>
</head>

<body>
  <?php       
      include 'nav.php';
   ?>
  <div class="container">

    <div class="culturebox">
      <!--  Slides -->
      <?php 
      $cul_id = $_GET['value'];
      $ethnicity = $_GET['value1'];
//      $sql="select * from culture_slide where cul_id='$cul_id';";
//      $result=mysqli_query($conn,$sql);
//      while($row=mysqli_fetch_assoc($result)){
      ?>

      <div class="mySlides fade">
        <!-- Two classes under one div -->
        <img src="src/image/tharuculyure%20-%20Copy1.jpg" style="width:100%" />
        <div class="text"><?php echo $ethnicity." Culture"?></div>
      </div>
     
      
      <div class="mySlides fade">
        <img src="src/image/tharuculture%20-%20Copy1.jpg" style="width:100%">
        <div class="text"><?php echo $ethnicity." Culture"?></div>
      </div>

      <div class="mySlides fade">
        <img src="src/image/Bardiyacommunityhtharu1.jpg" style="width:100%">
        <div class="text"><?php echo $ethnicity." Culture"?></div>
      </div>
       <?php// } ?>

    </div>

      <br />
    </div>

    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    <!--    description box      -->
    <div class="descriptionbox">

      <?php 
     
    $sql="select description from culture where cul_id='$cul_id';";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
       echo $row['description'] ;
    }?>

    </div>
    <div class="homestaylistbox">
      <?php 
    $sql="select ch_reg_num,ch_name from community_homestay where ch_ethnicity='$ethnicity';";
    $result=mysqli_query($conn,$sql);
    while($row1=mysqli_fetch_assoc($result)){
      $reg_num = $row1['ch_reg_num'];?>
      <a href="homestaypage.php?value=<?php echo $row1['ch_reg_num'];?>">
        <div class="homestaybox">
          <div class="imagebox">
            <img src="src/image/Bardiyacommunityhtharu.jpg" />
          </div>
          <div class="contentbox">
            <h3><?php echo $row1['ch_name'];?></h3>
            <p><?php 
            $sql3="select desc_intro from community_homestay_description where ch_reg_num='$reg_num';";
            $result=mysqli_query($conn,$sql3);
            while($row3=mysqli_fetch_assoc($result)){
                echo $row3['desc_intro'];
            }?>
            </p>
            <img src="src/image/location.png" />
            <?php
            $sql4="select ch_district, ch_municipality, ch_place_name from community_homestay_address where ch_reg_num='$reg_num';";
             $result=mysqli_query($conn,$sql4);
            while($row4=mysqli_fetch_assoc($result)){?>
            <div class="location"><?php echo $row4['ch_place_name'].",".$row4['ch_municipality'].",".$row4['ch_district'].",Nepal";?></div>
            <?php }?>
           
            <div class="favourites">
              <input type="checkbox" name="heart" id="heart"><label for="heart"></label>
            </div>
          </div>
        </div>
      </a>
      <?php } ?>
<!--

      <span id="less"></span>
      <span id="more">
-->
       
  <script>
    //Slides ko js
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
    //for show more and show less
    function load() {
      var less = document.getElementById("less");
      var more = document.getElementById("more");
      var btnTxt = document.getElementById("load");

      if (less.style.display === "none") {
        less.style.display = "inline";
        btnTxt.innerHTML = "Load More";
        more.style.display = "none";
      } else {
        less.style.display = "none";
        btnTxt.innerHTML = "Load Less";
        more.style.display = "inline";
      }
    }

  </script>
     
<!--
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
-->

    </div>
  </body>
</html>

