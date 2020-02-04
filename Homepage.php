<!DOCTYPE html>
<html>

<head>
    <title>
        Homepage
    </title>

    <link rel="stylesheet" type="text/css" href="src/css/homepage.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

    </style>
</head>

<body>
    <div class="upperbox">
      <?php       
      include 'nav.php';
   ?> 

        <form method="post" action="src/includes/searchSystem.php">
            <input type="text" name="searchtext" id="searchBar" placeholder="search homestays.." />
            <button type="submit" name="search">search</button>
        </form>
    </div>
    <div class="infobox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto itaque numquam laudantium quo est optio. In ad quae quas suscipit, molestiae, illo. Quisquam alias, deleniti minima iusto consequuntur recusandae culpa.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt, distinctio assumenda fugit dolore, eos optio nulla modi esse dolor, ab est ratione. Blanditiis, ut, autem inventore at enim cumque.</div>
    <div class="culture">
        <div class="flexcontainer">
            <a href="cultureListSystem.php">
                <h2>
                    <div class="text">Cultures</div>
                </h2>
            </a>
            <div class="culturebox">
                <div class="imgBox">
                    <img src="src/image/lwangghalel.jpg" />
                </div>
                <div class="overlay">
                    <div class="text">Gurung</div>
                </div>
            </div>
            <div class="culturebox">
                <div class="imgBox">
                    <img src="src/image/gorkhahomestay.jpg" />
                </div>
                <div class="overlay">
                    <div class="text">Magar</div>
                </div>
            </div>
            <div class="culturebox">
                <div class="imgBox">
                    <img src="src/image/Homestay2.jpg" />
                </div>
                <div class="overlay">
                    <div class="text">Chhantyal</div>
                </div>
            </div>
            <div class="culturebox">
                <div class="imgBox">
                    <img src="src/image/Bardiyacommunityhtharu.jpg" />
                </div>
                <div class="overlay">
                    <div class="text">Tharu</div>
                </div>
            </div>
        </div>
    </div>
    <div class="homestaybox">
        <img src="src/image/lwangghalel%20-%20Copy.jpg" />
        <a href="homestaylist.php">
            <h2>Homestays</h2>
        </a>
    </div>
    <div class="testimonials">
        <img class="imgbox" src="src/image/user.png" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc

        </p>
    </div>
    <div class="addhomestaybox">Why Add Homestays?

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quo velit ea officiis saepe magni nihil distinctio esse eveniet iusto. Repellat optio maxime veniam, porro dolorem fuga nisi nobis asperiores?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quo velit ea officiis saepe magni nihil distinctio esse eveniet iusto. Repellat optio maxime veniam, porro dolorem fuga nisi nobis asperiores?Lorem ipsum dolor sit amet,
        </p>
    </div>
    <div class="benefits">
        <h3>Benefits of Adding Homestays</h3>
        <div class="benefitsbox">
            <div class="col1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla cum, eum amet numquam alias vitae magnam id illum, aspernatur maiores? A accusantium repellat, quo odit nulla voluptatibus nesciunt quae molestiae!

            </div>
            <div class="col2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla cum, eum amet numquam alias vitae magnam id illum, aspernatur maiores? A accusantium repellat, quo odit nulla voluptatibus nesciunt quae molestiae!
            </div>
            <div class="col3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla cum, eum amet numquam alias vitae magnam id illum, aspernatur maiores? A accusantium repellat, quo odit nulla voluptatibus nesciunt quae molestiae!

            </div>
        </div>
    </div>
    <div class="slider">
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" width="800" height="700">
            </a>
        </div>

        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" width="800" height="700">
            </a>

        </div>
        
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" width="800" height="700">
            </a>
        </div>
        
        <div class="gallery">
            <a target="_blank" href="src/image/bandipur-village.jpg">
                <img src="src/image/bandipur-village.jpg" width="800" height="700">
            </a>
        </div>
    </div>

    <footer>
        <div class="foot">
            <div class="text">Company</div>
            <a href="#">About</a>
            <a href="Homepage.php">Home</a>
        </div>
        <div class="text">Connect with us
            <div class="icons">
                <a href="#"><img src="src/image/facebook2.png" /></a>
                <a href="#"><img src="src/image/instagramlogo.png" /></a>
            </div>
        </div>
     </footer>

</body>
</html>
