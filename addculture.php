<?php

if (isset($_POST['submit'])) {
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName ="ruralstay";
    $conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
    if (!$conn) {
      die("Connection failed:".mysqli_connect_error());
    }


    $desp = $_POST['description'];
    $culture = $_POST['culture'];

    $sql = "insert into culture(cul_id,description,ethnicity) values('','$desp','$culture')"; 
    $result = mysqli_query($conn,$sql);

    if(!$result){
        echo 'unsuccessful';
    }
    else
    {
        header("refresh:1;changeculture.php");
    }




















}
?>

    <form  method="post">
    <label> Culture:</label><br>
    <input type="text" name="culture" placeholder="Write your name"><br><br>
    <label>Description:</label><br>
    <textarea type="text" rows="8" cols="100" name="description" placeholder ="Write your testimonial here"></textarea><br>

    <input type="submit" name ="submit" value="submit">

    </form>