<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration Table</title>
    <link rel="stylesheet" href="src/css/UserRegistrationTable.css">
    <style>

    @import url('https://fonts.googleapis.com/css?family=Raleway');

</style>
</head>
<body>
 <nav>
<div id="mySidenav" class="sidenav">
  <div class="logo">Logo</div>
  <ul>
      <li><a href="Admin.php" class="btn">Home</a></li>
      <li><a href="existinghomestay.php" class="btn">Existing Homestays</a></li>
      <li><a href="pendinghomestay.php" class="btn">Pending Homestays</a></li>
      <li><a href="addculture.php" class="btn">Add Information</a></li>
      <li><a href="adminUserRegistrationTable.php" class="btn active">User Registration</a></li>
      <li><a href="adminSettings.php" class="btn ">Settings</a></li>
  </ul>
</div>
</nav>
   <table class="content-table">
  <thead>
    <tr>
      <th>Full Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>  
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td></td>
    </tr><tr>
      <td></td>
      <td></td>
      
    </tr><tr>
      <td></td>
      <td></td>
      
    </tr><tr>
      <td></td>
      <td></td>
      
    </tr><tr>
      <td></td>
      <td></td>
      
    </tr>
  </tbody>
</table>
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