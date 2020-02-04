<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image upload</title>
    <link rel="stylesheet" href="src/css/image.css">
    <style>
            @import url('https://fonts.googleapis.com/css?family=Raleway');
    </style>
</head>
<body>
<nav>
<div id="mySidenav" class="sidenav">
  <div class="logo">Logo</div>
  <ul>
      <li><a href="host.php" class="btn">Home</a></li>
      <li><a href="hostBookingDetails.php" class="btn">Booking Details</a></li>
      <li><a href="hostUserSetting.php" class="btn">User Setting</a></li>
      <li><a href="hostImage.php" class="btn active">Image Setting</a></li>
      <li><a href="hostDetails.php" class="btn">Change Details</a></li>
      <li><a href="hostReviewRatings.php" class="btn" >Review and Ratings</a></li>
  </ul>
</div>
</nav>
<p>Image Uploading Page</p>
<!--    passing this explicitly   -->
    <div class="backgroundimg">
    <p class="heading">For Background Image</p>
     <input type="file" id = "infile" name="infile" onchange="showImage.call(this)">
     <img src="" alt="" style="display: none" height="200" id="image">
     </div>
     <div class="cultureimg">
      <p class="heading">For Cultural Image</p>
     <input type="file" id = "infile" name="infile" onchange="showImage1.call(this)">
     <img src="" alt="" style="display: none" height="200" id="image1">
     </div>
     <div class="cultureimg">
     <input type="file" id = "infile" name="infile" onchange="showImage2.call(this)">
     <img src="" alt="" style="display: none" height="200" id="image2">
     </div>
     <div class="backgroundimg">
     <input type="file" id = "infile" name="infile" onchange="showImage3.call(this)">
     <img src="" alt="" style="display: none" height="200" id="image3">
     </div>
     <script>
        function showImage()
         {
             if(this.files && this.files[0])
                 {
                    var obj = new FileReader();
                     obj.onload = function(data)
                     {
                        var image = document.getElementById("image");
                         image.src = data.target.result;
                         image.style.display = "block";
                         image.style.marginLeft = "350px";
                     }
                     obj.readAsDataURL(this.files[0]);
                 }
         }
          function showImage1()
         {
             if(this.files && this.files[0])
                 {
                    var obj = new FileReader();
                     obj.onload = function(data)
                     {
                        var image = document.getElementById("image1");
                         image.src = data.target.result;
                         image.style.display = "block";
                         image.style.marginLeft = "350px";
                     }
                     obj.readAsDataURL(this.files[0]);
                 }
         }
         function showImage2()
         {
             if(this.files && this.files[0])
                 {
                    var obj = new FileReader();
                     obj.onload = function(data)
                     {
                        var image = document.getElementById("image2");
                         image.src = data.target.result;
                         image.style.display = "block";
                         image.style.marginLeft = "350px";
                     }
                     obj.readAsDataURL(this.files[0]);
                 }
         }
         function showImage3()
         {
             if(this.files && this.files[0])
                 {
                    var obj = new FileReader();
                     obj.onload = function(data)
                     {
                        var image = document.getElementById("image3");
                         image.src = data.target.result;
                         image.style.display = "block";
                         image.style.marginLeft = "350px";
                     }
                     obj.readAsDataURL(this.files[0]);
                 }
         }
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