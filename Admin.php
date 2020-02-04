<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="src/css/admin.css">
<style>

    @import url('https://fonts.googleapis.com/css?family=Raleway');

</style>

</head>
<body>
<nav>
<div id="mySidenav" class="sidenav">
  <div class="logo">Logo</div>
  <ul>
      <li><a href="Admin.php" class="btn active">Home</a></li>
      <li><a href="src/includes/adminExistingHomestays.php" class="btn">Existing Homestays</a></li>
      <li><a href="src/includes/adminPendingHomestays.php" class="btn">Pending Homestays</a></li>
      <li><a href="src/includes/addculture.php" class="btn">Add Information</a></li>
      <li><a href="src/includes/userinfo.php" class="btn">User Registration</a></li>
      <li><a href="adminsetting.php" class="btn ">Settings</a></li>
      <li><a href="src/includes/logout.inc.php" class="btn ">Log out</a></li>
  </ul>
</div>
</nav>
<p>Welcome to Admin Panel</p>
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
