<html>

<head>
 <title>Details Form</title>
 <link rel="stylesheet" type="text/css" href="src/css/details.css" />
 <style>
  @import url('https://fonts.googleapis.com/css?family=Raleway');

 </style>
</head>

<body>
 <div class="formbox">
  <h1>Details</h1>
  <?php $reg_num=$_GET['value'];?>
  <form action="src/includes/detailsSystem.php?value=<?php echo $reg_num; ?>" novalidate method="post">
   <div class="area">
    <label for="Introduction">Introduction</label><br/>
    <textarea name="introduction" id="area" cols="65" rows="8" placeholder="Give introduction"></textarea><br />
   </div>
   <div class="area">
    <label for="About Place">About Place</label><br/>
    <textarea name="aboutPlace" id="area" cols="65" rows="8" placeholder="Write about the place"></textarea><br />
   </div>
   <div class="area">
    <label for="Climate">Climate</label><br/>
    <textarea name="climate" id="area" cols="65" rows="8" placeholder="Write about climate"></textarea><br />
   </div>
   <div class="area">
    <label for="About Host">About Hosts</label><br/>
    <textarea name="aboutHost" id="area" cols="65" rows="8" placeholder="Write about hosts"></textarea><br />
   </div>
   <div class="area">
    <label for="Facilities">Facilities</label><br/>
    <textarea name="facilities" id="area" cols="65" rows="8" placeholder="Write about facilities"></textarea><br />
   </div>
   <div class="area">
    <label for="Cost per guest per night">Cost per guest per night</label><br/>
    <input type="number" name="cost" placeholder="In rupees" min="1"><br>
   </div>
   <div class="area">
   <label for="Upload homestay photo">Upload homestay photo</label><br/>
   <input type="file" name="image" value="uploadImage" accept=".jpg,.jpeg,.png">
   <!--acccept only jpg, jpeg and png -->
   </div>
   <div class="area">
    <button class="button" nametype="submit" name="submit">Finish</button>
   </div>
  </form>
 </div>

</body>

</html>
