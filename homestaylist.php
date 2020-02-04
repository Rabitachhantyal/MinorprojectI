<html>
    <head>
        <title>Homestay Form</title>
        <link rel="stylesheet" type="text/css" href="src/css/homestaylist.css"/>
        <style>

            @import url('https://fonts.googleapis.com/css?family=Raleway');

        </style>
    </head>
    <body>
       <?php  
//      require "connection.php";
      include 'nav.php';
   ?> 
        <div class="homestaylistbox">
        <h2>Homestays</h2>
        
<!--
 <div class="homestaylistbox">
      <?php 
   // $sql="select * from community_homestay where ch_ethnicity='$ethnicity';";
    //$result=mysqli_query($conn,$sql);
    //while($row1=mysqli_fetch_assoc($result)){
      //$reg_num = $row1['ch_reg_num'];?>
      <a href="homestaypage.php?value=<?php //echo $row1['ch_reg_num'];?>">
        <div class="homestaybox">
          <div class="imagebox">
            <img src="src/image/Bardiyacommunityhtharu.jpg" />
          </div>
          <div class="contentbox">
            <h3><?//php echo $row1['ch_name'];?></h3>
            <p><?php 
            //$sql3="select desc_intro from community_homestay_description where ch_reg_num='$reg_num';";
            //$result=mysqli_query($conn,$sql3);
            //while($row3=mysqli_fetch_assoc($result)){
              //  echo $row3['desc_intro'];
           // }?>
            </p>
            <img src="src/image/location.png" />
            <?php
        //    $sql4="select ch_district, ch_municipality, ch_place_name from community_homestay_address where ch_reg_num='$reg_num';";
          //   $result=mysqli_query($conn,$sql4);
            //while($row4=mysqli_fetch_assoc($result)){?>
            <div class="location"><?php //echo $row4['ch_place_name'].",".$row4['ch_municipality'].",".$row4['ch_district'].",Nepal";?></div>
            <?php// }?>
           
            <div class="favourites">
              <input type="checkbox" name="heart" id="heart"><label for="heart"></label>
            </div>
          </div>
        </div>
      </a>
      <?php //} ?>
          </div>
      </div>
-->
        <a href="homestaypage.php?value=500">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <img src="src/image/location.png"/><div class="location">Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart" id="heart"><label for="heart"></label>
              </div>
            </div>
        </div>
        </a>
        <a href="homestaypage.php">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <img src="src/image/location.png"/><div class="location">Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart2" id="heart2"><label for="heart2"></label>
              </div>
            </div>
        </div>
        </a>
        <a href="homestaypage.php">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <div class="location"><img src="src/image/location.png"/>Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart9" id="heart9"><label for="heart9"></label>
              </div>
            </div>
        </div>
        </a>
        <a href="homestaypage.php">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <img src="src/image/location.png"/><div class="location">Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart3" id="heart3"><label for="heart3"></label>
              </div>
            </div>
        </div>
        </a>
        <span id="less"></span>
        <span id="more">
        <a href="homestaypage.php">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <img src="src/image/location.png"/><div class="location">Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart4" id="heart4"><label for="heart4"></label>
              </div>
            </div>
            
        </div>
        </a>
        <a href="homestaypage.php">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <img src="src/image/location.png"/><div class="location">Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart5" id="heart5"><label for="heart5"></label>
              </div>
            </div>
        </div>
        </a>
        <a href="homestaypage.php">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <img src="src/image/location.png"/><div class="location">Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart6" id="heart6"><label for="heart6"></label>
              </div>
            </div>
        </div>
        </a>
        <a href="homestaypage.php">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <img src="src/image/location.png"/><div class="location">Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart7" id="heart7"><label for="heart7"></label>
              </div>
            </div>
        </div>
        </a>
        <a href="homestaypage.php">
        <div class="homestaybox">
            <div class="imagebox">
                <img src="src/image/Bardiyacommunityhtharu.jpg"/>
           </div>
            <div class="contentbox">
              <h3>Panauti Community homestay</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nam nulla quibusdam, ut unde pariatur culpa dignissimos iure dolor est non omnis expedita, animi. Modi dolorum architecto commodi eligendi assumenda. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla unde tempore, repellat temporibus aliquid ipsa ad </p>
              <img src="src/image/location.png"/><div class="location">Panauti-kushadeviRd, Panauti 45209,Nepal</div>
              <div class="favourites">
              <input type="checkbox" name="heart8" id="heart8"><label for="heart8"></label>
              </div>
            </div>
        </div>
        </a></span>
        <button type="button" id="load" onclick="load()">Load More</button>
        </div>
        
        <footer>
       <div class="foot">
         <div class="text">Company</div>
         <a href="#">About</a>
         <a href="Homepage.php">Home</a>
         </div>
       <div class="text">Connect with us
        <div class="icons">
            <a href="#"><img src="src/image/facebook2.png"/></a> 
            <a href="#"><img src="src/image/instagramlogo.png"/></a> 
        </div>
        </div>
        
    </footer>

        <script type="text/javascript">
            //for show more and show less
        function load()
        {
             var less = document.getElementById("less");
              var more = document.getElementById("more");
              var btnTxt = document.getElementById("load");

              if (less.style.display === "none") {
                less.style.display = "inline";
                btnTxt.innerHTML = "Load More"; 
                more.style.display = "none";
              } 
            else {
                less.style.display = "none";
                btnTxt.innerHTML = "Load Less"; 
                more.style.display = "inline";
                }
        }

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
