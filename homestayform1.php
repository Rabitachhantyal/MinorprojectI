<html>
    <head>
        <title>Homestay Form</title>
        <link rel="stylesheet" type="text/css" href="src/css/homestayform1.css"/>
        <style>

            @import url('https://fonts.googleapis.com/css?family=Raleway');

        </style>
        <script type="text/javascript" src="src/js/homestayform1.js"></script>
    </head>
    <body>
        <div class="formbox">
        <h2>Tell us a little about you</h2>
        <form action="src/includes/homestayform1system.php" method ="post" novalidate onsubmit="return validateForm();">
            <label for="fullName">Full Name</label>
            <input type="text" name="fullName" id="fullName"placeholder="Enter full name" onkeyup="return validateForm()">
            <span id="msg1" style="color: red;"></span><br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email"placeholder="Enter email" onkeyup="return validateForm()">
            <span id="msg2" style="color: red;"></span><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"placeholder="Enter password" onkeyup="return validateForm()">
            <span id="msg4" style="color: red;"></span><br>
            <label for="password">Confirm Password</label>
            <input type="password" name="repassword" id="password"placeholder="Confirm password" onkeyup="return validateForm()">
            <span id="msg5" style="color: red;"></span><br>
            <label for="contact">Contact Info</label>
            <input type="tel" name="contact" id="contact"placeholder="Enter contact number" onkeyup="return validateForm()">
            <span id="msg3" style="color: red;"></span><br>
            <button type="submit" name ="submit">Submit</button>
        </form>
        </div> 
    </body>
</html>
