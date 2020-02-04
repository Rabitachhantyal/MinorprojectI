<html>

<head>
    <title>Homestay Page</title>
    <link rel="stylesheet" type="text/css" href="src/css/homestaypage.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

    </style>
</head>

<body>
    <div class="imagebox">
        <?php       
        include 'nav.php';
        include 'src/includes/connection.php';
        $reg_num=$_GET['value'];
        $sql="select * from community_homestay where ch_reg_num='$reg_num';";
        $sql2="select ch_district, ch_municipality, ch_place_name from community_homestay_address where ch_reg_num='$reg_num';";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){?>

        <div class="text"><?php echo $row['ch_name'];?></div><?php } ?>
        <?php $result=mysqli_query($conn,$sql2);
            while($row2=mysqli_fetch_assoc($result)){?>
            <img src="src/image/location3.jpg" />
        <div class="location"><?php echo $row2['ch_place_name'].",".$row2['ch_district'].",Nepal";?></div><?php } ?>
        <div class="descriptionbox">
            <p>
                <?php 
                $query="select * from community_homestay_description where ch_reg_num='$reg_num';";
                $result=mysqli_query($conn,$query);
                while($row3=mysqli_fetch_assoc($result)){?>
                    <h3>Introduction</h3><br/>
                    <?php echo $row3['desc_intro'];?><br/><br/>
                   <!-- <p onclick="myFunction()" id="myText">Show more</p>-->
                    <h3>About place</h3><br/>
                    <?php echo $row3['desc_about_place'];?><br/><br/>
                    <h3>Climate</h3><br/>
                    <?php echo $row3['desc_climate'];?><br/><br/>
                    <h3>About host</h3><br/>
                    <?php echo $row3['desc_about_host'];?><br/><br/>
                    <h3>Facilities</h3><br/>
                    <?php echo $row3['desc_facilities'];?><br/><br/>
                <?php } ?>
            </p></div>
    <div class="heading">
        Places To Visit
    </div>
    <div class="galleryimg">
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" />
            </a>
        </div>

        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" />
            </a>

        </div>
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" />
            </a>
        </div>
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" />
            </a>
        </div>
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" />
            </a>
        </div>
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" />
            </a>
        </div>
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" />
            </a>
        </div>
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" />
            </a>
        </div>
    </div>
<!--
    <div class="facilities">

        <div class="descriptionbox">
            <div class="heading">
                About Hosts and Facilities
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae obcaecati consequuntur iste laboriosam ut rerum perspiciatis. Eveniet soluta molestias eum voluptas magnam. Eaque consequuntur eligendi enim optio fugiat, excepturi ratione!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae obcaecati consequuntur iste laboriosam ut rerum perspiciatis. Eveniet soluta molestias eum voluptas magnam. Eaque consequuntur eligendi enim optio fugiat, excepturi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae obcaecati consequuntur iste laboriosam ut rerum perspiciatis. Eveniet soluta molestias eum voluptas magnam. Eaque consequuntur eligendi enim optio fugiat, excepturi
            </p>
        </div>
    </div>
-->
                <?php 
                $query="select cost_per_guest_per_night from community_homestay_description where ch_reg_num='$reg_num';";
                $result=mysqli_query($conn,$query);
                while($row3=mysqli_fetch_assoc($result)){?>
                <p>Cost/guest/night : <?php echo $row3['cost_per_guest_per_night']?></p>
                <?php
//                    $idUser=$_SESSION['userId'];
                    if(!isset($_SESSION['userId'])){?>
                        <button class="available" type="submit" id="availability" name="submit">Book Now</button>
                    <?php }  else{?>
                <form method="post" action="Booking.php?value=<?php echo $reg_num;?>&value1=<?php echo $row3['cost_per_guest_per_night']?>">
                    <button class="available" type="submit" id="availability" name="submit">Book Now</button>
         
                </form><?php } }?>
                <footer>
                    <div class="foot">
                        <label for="Company">Company</label>
                        <a href="#">About</a>
                        <a href="Homepage.php">Home</a>
                    </div>

                    <label>Connect with us</label>
                    <div class="icons">
                        <a href="#"><img src="src/image/facebook2.png" /></a>
                        <a href="#"><img src="src/image/instagramlogo.png" /></a>
                    </div>
                </footer>


                <!--For show more and show less-->
                <!--<script>
//                    function myFunction() {
//                        var less = document.getElementById("less");
//                        var more = document.getElementById("more");
//                        var text = document.getElementById("myText");
//
//                        if (less.style.display === "none") {
//                            less.style.display = "inline";
//                            text.innerHTML = "Show more";
//                            more.style.display = "none";
//                        } else {
//                            less.style.display = "none";
//                            text.innerHTML = "Show less";
//                            more.style.display = "inline";
//                        }
//                    }


                    /*for check availability*/
                    //        function checkAvailability() {
                    //            var checkIn = document.getElementById("checkIn");
                    //            var checkOut = document.getElementById("checkOut");
                    //            var availability = document.getElementById("availability");
                    //            var msg = document.getElementById("msg");
                    //
                    //            if (checkIn == "" || checkOut == "") {
                    //                msg.textContent = "You must select checkin and checkout date";
                    //                return false;
                    //            }
                    //        }

                    //        function validateBook() {
                    //        var checkIn = document.getElementById('checkIn').value;
                    //        var checkOut = document.getElementById('checkOut').value;
                    //        var msg1 = document.getElementById('msg1');
                    //        var msg2 = document.getElementById('msg2');   
                    //        var date = new Date();
                    //        var ci = new Date(checkIn);
                    //        if(ci<=date)
                    //            {
                    //                msg1.textContent = "Enter valid date";
                    //                return false;
                    //            }
                    //           else{
                    //            msg1.textContent = "";
                    //          }
                    //         var cout = new Date(checkOut);
                    //         if(cout<=ci)
                    //            {
                    //                msg2.textContent = "Enter valid date";
                    //                return false;
                    //            }
                    //        else {
                    //        msg2.textContent = "";
                    //          return true;
                    //
                    //        }
                    }

                </script>-->
</body>

</html>
