<html>
    <head>
        <title>Homestay Form</title>
        <link rel="stylesheet" type="text/css" href="src/css/homestayform2.css"/>
<!--        <script type="text/javaScript" src="js/homestayform2.js"></script>-->
        <style>

            @import url('https://fonts.googleapis.com/css?family=Raleway');

        </style>
    </head>
    <body>
        <div class="formbox">
        <h2>Tell us a little about homestay</h2>
        <?php
            $idUsers=$_GET['val'];?>
        <form action="src/includes/homestayform2system.php?value=<?php echo $idUsers; ?>" method="post" novalidate enctype="multipart/form-data">
            <label for="homestayName">Homestay Name</label>
            <input type="text" name="homestay" id="homestay"placeholder="enter homestay name"><br>
            <label for="Registration Number">Registration Number</label>
            <input type="number" name="registrationNumber" id="registration"placeholder="Enter registration  number" min="1"><br>
            <label for="Location">Location</label>
            <div class="location">
            <div class="location-1">
            <div class="province">
            <label for="province">Province</label>
            <select name="Province">
                <option value = "1">Province no. 1</option>
                <option value = "2">Province no. 2</option>
                <option value = "3">Province no. 3</option>
                <option value = "4">Province no. 4</option>
                <option value = "5">Province no. 5</option>
                <option value = "6">Province no. 6</option>
                <option value = "7">Province no. 7</option>
            </select>
            </div>
            <div class="zone">
            <label for="zone">Zone</label>
            <select name="Zone">
                <option value ="Mechi">Mechi </option>
                <option value ="Koshi">Koshi</option>
                <option value ="Sagarmatha">Sagarmatha</option>
                <option value ="Janakpur">Janakpur</option>
                <option value ="Bagmati">Bagmati</option>
                <option value ="Narayani">Narayani</option>
                <option value ="Gandaki">Gandaki</option>
                <option value ="Lumbini">Lumbini</option>
                <option value ="Dhaulagiri">Dhaulagiri</option>
                <option value ="Rapti">Rapti</option>
                <option value ="Bheri">Karnali</option>
                <option value ="Karnali">Bheri</option>
                <option value ="Seti">Seti</option>
                <option value ="Mahakali">Mahakali</option>
            </select>
            </div>
            </div>
            <div class="location0">
            <div class="district">
            <label for="district">District</label>
            <select name="District">
                <option value ="Achham">Achham</option>
                <option value ="Arghakhanchi">Arghakhanchi</option>
                <option value ="Baglung">Baglung</option>
                <option value ="Baitadi">Baitadi</option>
                <option value ="Bajhang">Bajhang</option>
                <option value ="Bajura">Bajura</option>
                <option value ="Banke">Banke</option>
                <option value ="Bara">Bara</option>
                <option value ="Bardiya">Bardiya</option>
                <option value ="Bhaktapur">Bhaktapur</option>
                <option value ="Bhojpur">Bhojpur</option>
                <option value ="Chitwan">Chitwan</option>
                <option value ="Dadeldhura">Dadeldhura</option>
                <option value ="Dailekh">Dailekh</option>
                <option value ="Dang Deokhuri">Dang Deokhuri</option>
                <option value ="Darchula">Darchula</option>
                <option value ="Dhading">Dhading</option>
                <option value ="Dhankuta">Dhankuta</option>
                <option value ="Dhanusa">Dhanusa</option>
                <option value ="Dolakha">Dolakha</option>
                <option value ="Dolpa">Dolpa</option>
                <option value ="Doti">Doti</option>
                <option value ="Gorkha">Gorkha</option>
                <option value ="Gulmi">Gulmi</option>
                <option value ="Humla">Humla</option>
                <option value ="Ilam">Ilam</option>
                <option value ="Jajarkot">Jajarkot</option>
                <option value ="Jhapa">Jhapa</option>
                <option value ="Jumla">Jumla</option>
                <option value ="Kailali">Kailali</option>
                <option value ="Kalikot">Kalikot</option>
                <option value ="Kanchanpur">Kanchanpur</option>
                <option value ="Kapilvastu">Kapilvastu</option>
                <option value ="Kaski">Kaski</option>
                <option value ="Kathmandu">Kathmandu</option>
                <option value ="Kavrepalanchok">Kavrepalanchok</option>
                <option value ="Khotang">Khotang</option>
                <option value ="Lalitpur">Lalitpur</option>
                <option value ="Lamjung">Lamjung</option>
                <option value ="Mahottari">Mahottari</option>
                <option value ="Makwanpur">Makwanpur</option>
                <option value ="Manang">Manang</option>
                <option value ="Morang">Morang</option>
                <option value ="Mugu">Mugu</option>
                <option value ="Mugu">Mugu</option>
                <option value ="Myagdi">Myagdi</option>
                <option value ="Nawalparasi">Nawalparasi</option>
                <option value ="Nuwakot">Nuwakot</option>
                <option value ="Okhaldhunga">Okhaldhunga</option>value
                <option value ="Palpa">Palpa</option>
                <option value ="Panchthar">Panchthar</option>
                <option value ="Parbat">Parbat</option>
                <option value ="Parsa">Parsa</option>
                <option value ="Pyuthan">Pyuthan</option>
                <option value ="Ramechhap">Ramechhap</option>
                <option value ="Rasuwa">Rasuwa</option>
                <option value ="Rautahat">Rautahat</option>
                <option value ="Rolpa">Rolpa</option>
                <option value ="Rukum">Rukum</option>
                <option value ="Rupandehi">Rupandehi</option>
                <option value ="Salyan">Salyan</option>
                <option value ="Sankhuwasabha">Sankhuwasabha</option>
                <option value ="Saptari">Saptari</option>
                <option value ="Sarlahi">Sarlahi</option>
                <option value ="Sindhuli">Sindhuli</option>value
                <option value ="Sindhupalchok">Sindhupalchok</option>
                <option value ="Siraha">Siraha</option>
                <option value ="Solukhumbu">Solukhumbu</option>
                <option value ="Sunsari">Sunsari</option>
                <option value ="Surkhet">Surkhet</option>
                <option value ="Syangja">Syangja</option>
                <option value ="Tanahu">Tanahu</option>
                <option value ="Taplejung">Taplejung</option>
                <option value ="Terhathum">Terhathum</option>
                <option value ="">Udayapur</option>
            </select><br/>
            </div>
            <div class="municipality">
            <label for="Municipality">Municipality/VDC</label>
            <input type="text" name="municipality" id="municipality" placeholder="municipality/vdc"><br></div>
            </div>
            <div class="location1">
            <div class="ward">
            <label for="Ward">Ward Number</label>
            <input type="number" name="ward" id="ward" placeholder="ward number" min="1"><br></div>
            <div class="village">
            <label for="village">Village Name</label>
            <input type="text" name="village" id="village" placeholder="village name" ><br></div>
            </div>
            </div>
            <div class="number">
            <div class="house">
            <label for="thouse">Total number of houses</label>
            <input type="number" name="thouse" id="thouse"placeholder="enter no. of houses" min="1" max="100"><br></div>
            <div class="rooms">
            <label for="Trooms">Total number of rooms</label>
            <input type="number" name="trooms" id="trooms"placeholder="enter no. of rooms" min="1" max="100"><br>
            </div>
            </div>
            <div class="ethnicity">
            <label for="Ethnicity">Ethnicity</label>
            <select name="Ethnicity">
                <option value ="Brahmin">Brahmin</option>
                <option value ="Chhantyal">Chhantyal</option>
                <option value ="Chhertri">Chhertri</option>
                <option value ="Gurung">Gurung</option>
                <option value ="Kirati">Kirati</option>
                <option value ="Magar">Magar</option>
                <option value ="Manang bas">Manang bas</option>
                <option value ="Newar">Newar</option>
                <option value ="Rajbansi">Rajbansi</option>
                <option value ="Satar">Satar</option>
                <option value ="Tamang">Tamang</option>
                <option value ="Thakali">Thakali</option>
                <option value ="Tharu">Tharu</option>
            </select><br>
            </div>
            <label for="Certificate">Upload Certificate</label>
            <input type="file" name="certificate" id="certificate" accept =".jpg,.jpeg,.png"><br>
            <button type="submit" name="submit" value="insert" id="insert">Next</button>
        </form>
        </div> 
    </body>
</html>
