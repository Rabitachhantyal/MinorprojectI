<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change password</title>
    <link rel="stylesheet" href="src/css/hostReviewRatings.css">
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
      <li><a href="hostImage.php" class="btn">Image Setting</a></li>
      <li><a href="hostDetails.php" class="btn">Change Details</a></li>
      <li><a href="hostReviewRatings.php" class="btn active" >Review and Ratings</a></li>
  </ul>
</div>
</nav>
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