<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- ========================================
         Project:		   Amanda Dafler's Photography Site
         File Name:	   index.html
         Author:		   Shane Skinner
         Date Created:	12-07-13
	      Last Revised:	04-02-2015
         Version:       1.0.1
         File Location:	C:\Users\Shane\Documents\Professional\My Web Sites\Amanda's Photography Website
      ========================================= -->

<!-- =============== Meta Data =============== -->
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width" />
      <meta name="author" content="Shane Skinner" />
      <meta name="description" content="This is the photo gallery site for an amateur, aspiring photographer, Amanda Dafler. 
                                        Amanda lives in beautiful North Bend, Washington, and loves taking photos of nature, 
                                        wildlife, people, and more. Her photos are available to be purchased. Please email 
                                        her for details." />
      <meta name="keywords" content="photographer, photography, photos, photo, gallery, photo gallery, picture, pictures, 
                                     pic, pics, North Bend, Washington, Snoqualmie, Snoqualmie valley, Seattle, wildlife, 
                                     nature, mountain, mount, rainer, people, wedding, senior, portraits, party" />
      <meta name="classification" content="Photography" />
      <meta name="owner" content="Amanda Dafler" />
      <meta name="reply-to" content="adafler@hotmail.com" />
      <meta name="geo.region" content="US-WA" />
      <meta name="geo.placename" content="North Bend" />
      <meta name="geo.position" content="47.495658;-121.786777" />
      <meta name="ICBM" content="47.495658, -121.786777" />

      <meta name="application-name" content="A. Dafler Photos"/>
      <meta name="msapplication-TileColor" content="#000000"/>
      <meta name="msapplication-square70x70logo" content="windowsTile/tiny.jpg"/>
      <meta name="msapplication-square150x150logo" content="windowsTile/square.jpg"/>
      <meta name="msapplication-wide310x150logo" content="windowsTile/wide.jpg"/>
      <meta name="msapplication-square310x310logo" content="windowsTile/large.jpg"/>

      <title>Amanda Dafler's Photo Gallery</title>

<!-- =============== Link to Stylesheet(s) =============== -->     
      <link href="css/amandas_styles.css" rel="stylesheet" type="text/css" media="screen" /> 
      <link href="css/responsiveslides.css" rel="stylesheet" type="text/css" media="screen" />

<!-- =============== Link to JavaScript/JQuery =============== -->
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="js/responsiveslides.min.js"></script>
      <script src="js/responsiveslides.js"></script>

      <script>
         $(function() {
            $(".rslides").responsiveSlides();
         });
      </script>

   </head>

   <body>
<!-- =============== Google Analytics =============== -->
      <?php include_once("analyticstracking.php") ?>

      <section class="page">
      
<!-- ========================= Header ========================= -->
         <section class="heading">
            <header>
               <h1>Welcome to Amanda Dafler's Photo Gallery</h1>
            </header>
         </section>

<!-- ========================= Main Body Section ========================= -->
         <section class="main">
            <ul class="rslides">
               <li><img src="images/images_lg/sunsetocean.jpg" alt="Tree Frog"></li>
               <li><img src="images/images_lg/frog.jpg" alt="Tree Frog"></li>
               <li><img src="images/images_lg/sunsetbeach.jpg" alt="Tree Frog"></li>
               <li><img src="images/images_lg/skyline.jpg" alt="Tree Frog"></li>
               <li><img src="images/images_lg/throughthetrees.jpg" alt="Tree Frog"></li>
               <li><img src="images/images_lg/seattle.jpg" alt="Cloudy day in Seattle"></li>
               <li><img src="images/images_lg/sunflower2.jpg" alt="Sunflower #2"></li>
               <li><img src="images/images_lg/sunsetwater.jpg" alt="Tree Frog"></li>
               <li><img src="images/images_lg/clownfish.jpg" alt="Clownfish"></li>
               <li><img src="images/images_lg/swings.jpg" alt="Swings"></li>
               <li><img src="images/images_lg/aquarium.jpg" alt="Seattle Aquarium"></li>
               <li><img src="images/images_lg/seal.jpg" alt="Harbor Seal"></li>
               <li><img src="images/images_lg/graffiti.jpg" alt="Bridge with Graffiti"></li>
               <li><img src="images/images_lg/dandilion.jpg" alt="Dandilion"></li>
               <li><img src="images/images_lg/fish.jpg" alt="Fish"></li>
               <li><img src="images/images_lg/traintracks.jpg" alt="Train Tracks"></li>
               <li><img src="images/images_lg/orangeflower.jpg" alt="Orange Dahlia"></li>
               <li><img src="images/images_lg/fishing.jpg" alt="Fisherman's Paradise"></li>
               <li><img src="images/images_lg/otters.jpg" alt="Otters"></li>
               <li><img src="images/images_lg/bigwheel.jpg" alt="The Big Wheel in Seattle"></li>
               <li><img src="images/images_lg/bird.jpg" alt="Bird"></li>
               <li><img src="images/images_lg/sunflower5.jpg" alt="Sunflower #5"></li>
               <li><img src="images/images_lg/lookingglass.jpg" alt="The View from a Looking Glass in Seattle"></li>
               <li><img src="images/images_lg/pinkflower.jpg" alt="Pink Sweat Peas"></li>
               <li><img src="images/images_lg/seagull.jpg" alt="Seagull"></li>
               <li><img src="images/images_lg/snow.jpg" alt="Snowfall"></li>
               <li><img src="images/images_lg/sunflower3.jpg" alt="Sunflower #3"></li>
               <li><img src="images/images_lg/trees.jpg" alt="Trees"></li>
               <li><img src="images/images_lg/sunflower4.jpg" alt="Sunflower #4"></li>
               <li><img src="images/images_lg/view.jpg" alt="Pretty View"></li>
               <li><img src="images/images_lg/sunflower6.jpg" alt="Sunflower #6"></li>
            </ul>
         </section><!-- End .main -->

         <?php include "php/nav_menu.php";?> <!-- Adds Nav Menu -->
      
<!-- ========================= Footer ========================= -->
         <footer>
            <?php include "php/footer.php"; ?>
         </footer>
      </section><!-- End .page -->
   </body>
</html>