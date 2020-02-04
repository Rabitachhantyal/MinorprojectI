
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add and Delete Culture</title>
        <link rel="stylesheet" href="../css/addculture.css"/>
        <style>

            @import url('https://fonts.googleapis.com/css?family=Raleway');

        </style>
    </head>
    <body>

   <button class="button1" type="submit" name="submit" id="button1">Add Information</button>
    <div class="popup">
         <div class="formclass">
        <form  method="post" enctype="multipart/form-data">
        <label> Culture:</label><br>
        <input type="text" name="culture" placeholder="Write your culture name" class="culture" id="culture"><br><br>
        <label>Description:</label><br>
        <textarea type="text" rows="12" cols="59" name="description" class="description" placeholder ="Write your description here" id="description"></textarea><br>

        <label>Image: </label> <br>
        <input type ="file" name="img" accept = ".jpg,.jpeg,.png" >
        <input type="submit" name ="submit" value="submit" id="submit" class="submit">
       
    </form>
    <div class="close" id="close">+</div>
     </div>
    </div>
    <script type="text/javascript">
        document.getElementById('button1').addEventListener('click',function(){
          document.querySelector('.popup').style.display='block';
          
      });
      document.getElementById('close').addEventListener('click',function(){
          document.querySelector('.popup').style.display='none';
      });   
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


    $image_name = $_FILES['img']['name'];
    $image_size = $_FILES['img']['size'];
    
    $image_tmp = $_FILES['img']['tmp_name'];
    $directory = '../image/';
    $target_file = $directory.$image_name;

    move_uploaded_file($image_tmp,$target_file);
    $sql = "insert into culture(cul_id,description,ethnicity,cul_image) values('','$desp','$culture','$target_file')"; 
    $result = mysqli_query($conn,$sql);

    if(!$result){
        echo 'unsuccessful';
    }
    else
    {
       // echo 'sucessfull';
        header("refresh:1;changeculture.php");
    }

}
?>




 