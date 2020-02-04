<html>
    <head>
        <title>Details Form</title>
        <link rel="stylesheet" type="text/css" href="src/css/details.css"/>
        <style>

            @import url('https://fonts.googleapis.com/css?family=Raleway');

        </style>
    </head>
    <body>
        <div class="formbox">
        <h1>Details</h1>
        <form action="" novalidate>
           <div class="area">
            <label for="Introduction">Introduction</label>
            <textarea name="introduction" id="area" cols="65" rows="8" placeholder="Give introduction" ></textarea><br/>
            </div>
            <div class="area">
            <label for="About Place">About Place</label>
            <textarea name="aboutPlace" id="area" cols="65" rows="8" placeholder="Write about the place" ></textarea><br/>
            </div>
            <div class="area">
            <label for="Climate">Climate</label>
            <textarea name="climate" id="area" cols="65" rows="8" placeholder="Write about climate" ></textarea><br/>
            </div>
            <div class="area">
            <label for="About Host">About Hosts</label>
            <textarea name="aboutHost" id="area" cols="65" rows="8"  placeholder="Write about hosts"></textarea><br/>
            </div>
            <div class="area">
             <label for="Facilities">Facilities</label>
            <textarea name="facilities" id="area" cols="65" rows="8" placeholder="Write about facilities"></textarea><br/>
            </div>
            <div class="area">
            <label for="Cost per guest per night">Cost per guest per night</label>
            <input type="number" placeholder="In dollar" min="1"><br>
            </div>
            <div class="area">
            <button class="button" type="submit" formaction="image.html">Next</button>
            </div>
            </form>
        </div>
        <nav>
<div id="mySidenav" class="sidenav">
  <div class="logo">Logo</div>
  <ul>
      <li><a href="host.php" class="btn">Home</a></li>
      <li><a href="hostBookingDetails.php" class="btn">Booking Details</a></li>
      <li><a href="hostUserSetting.php" class="btn">User Setting</a></li>
      <li><a href="hostImage.php" class="btn">Image Setting</a></li>
      <li><a href="hostDetails.php" class="btn active">Change Details</a></li>
      <li><a href="hostReviewRatings.php" class="btn" >Review and Ratings</a></li>
  </ul>
</div>
</nav>
 <script>
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