<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- ========================================
         Project:		       Amanda Dafler's Photography Site Nature Photo Gallery
         File Name:		     photogallery.php
         Author:		       Shane Skinner
         Date Created:		 01-24-14
	       Last Revised:		 07-15-14
         File Location:		 C:\Users\Shane\Documents\Professional\My Web Sites\Amanda's Photography Website
         Supporting Files: photo_gallery_styles.css, amandas_styles.css
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

      <title>Nature Photo Gallery</title>

<!-- =============== Link to Stylesheet(s) =============== -->     
      <link href="css/photo_gallery_styles.css" rel="stylesheet" type="text/css" media="screen" />
      <link href="css/amandas_styles.css" rel="stylesheet" type="text/css" media="screen" />
      <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media = "screen  and (min-width: 599px)" />
      
<!-- =============== Link to Script(s) =============== --> 
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/prettyPhoto/jquery.prettyPhoto.js" type="text/javascript"></script>

      <script type="text/javascript" charset="utf-8">
         $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
         });
      </script>

   </head>

<!-- ============================================================ Page Body ============================================================ -->
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

         <section class="gallery">
            <div class="flex-container">
               <div class="flex-item"><a href="images/images_lg/sunsetocean.jpg" rel="prettyPhoto" 
                                         title="Beautiful Sunset overlooking the Pacific Ocean in Oregon.">
                                      <img src="images/images_sm/sunsetocean.jpg" 
                                            alt="Oregon Coast Ocean Sunset Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/throughthetrees.jpg" rel="prettyPhoto" 
                                         title="Oregon Coastline Through the Trees">
                                      <img src="images/images_sm/throughthetrees.jpg" 
                                            alt="Oregon Coastline Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/frog.jpg" rel="prettyPhoto" 
                                         title="Beautiful tree frog on a yellow dahlia">
                                      <img src="images/images_sm/frog.jpg" 
                                            alt="Tree Frog Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/skyline.jpg" rel="prettyPhoto" 
                                         title="Seattle Skyline with Stadiums and Space Needle">
                                      <img src="images/images_sm/skyline.jpg" 
                                            alt="Seattle Skyline Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/sunsetbeach.jpg" rel="prettyPhoto" 
                                         title="Beach Sunset on the Oregon Coastline">
                                      <img src="images/images_sm/sunsetbeach.jpg" 
                                            alt="Beach Sunset Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/graffiti.jpg" rel="prettyPhoto"
                                         title="Bridge with Graffiti">
                                      <img src="images/images_sm/graffiti.jpg"
                                           alt="Graffiti Bridge Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/sunsetwater.jpg" rel="prettyPhoto" 
                                         title="Sunset Overlooking the Ocean on the Oregon Coastline">
                                      <img src="images/images_sm/sunsetwater.jpg" 
                                            alt="Ocean Sunset Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/sunflower2.jpg" rel="prettyPhoto" 
                                         title="Sunflower #2">
                                       <img src="images/images_sm/sunflower2.jpg" 
                                            alt="Sunflower Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/fishing.jpg" rel="prettyPhoto" 
                                         title="Fisherman's Paradise">
                                      <img src="images/images_sm/fishing.jpg" 
                                            alt="Fisherman's Paradise Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/sunflower3.jpg" rel="prettyPhoto" 
                                         title="Sunflower #3">
                                      <img src="images/images_sm/sunflower3.jpg" 
                                            alt="Sunflower Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/seal.jpg" rel="prettyPhoto" 
                                         title="Harbor Seal">
                                      <img src="images/images_sm/seal.jpg" 
                                           alt="Harbor Seal Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/sunflower4.jpg" rel="prettyPhoto" 
                                         title="Sunflower #4">
                                       <img src="images/images_sm/sunflower4.jpg" 
                                            alt="Sunflower Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/seattle.jpg" rel="prettyPhoto" 
                                         title="Cloudy day in Seattle">
                                      <img src="images/images_sm/seattle.jpg" 
                                           alt="Cloudy Seattle Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/clownfish.jpg" rel="prettyPhoto"
                                         title="Beautiful Clownfish"> 
                                      <img src="images/images_sm/clownfish.jpg" 
                                           alt="Clownfish Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/sunflower5.jpg" rel="prettyPhoto" 
                                         title="Sunflower #5">
                                       <img src="images/images_sm/sunflower5.jpg" 
                                            alt="Sunflower Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/otters.jpg" rel="prettyPhoto" 
                                         title="Otters">
                                      <img src="images/images_sm/otters.jpg" 
                                           alt="Otters Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/aquarium.jpg" rel="prettyPhoto"
                                         title="Seattle Aquarium and blue skies with a cool cloud cover">
                                      <img src="images/images_sm/aquarium.jpg" 
                                           alt="Seattle Aquarium Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/snow.jpg" rel="prettyPhoto" 
                                         title="Snowfall">
                                       <img src="images/images_sm/snow.jpg" 
                                            alt="Snow Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/orangeflower.jpg" rel="prettyPhoto" 
                                         title="Beautiful orange dahlia">
                                       <img src="images/images_sm/orangeflower.jpg" 
                                            alt="Orange Dahlia Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/swings.jpg" rel="prettyPhoto" 
                                         title="Swings">
                                       <img src="images/images_sm/swings.jpg" 
                                            alt="Swings Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/fish.jpg" rel="prettyPhoto"
                                         title="Some type of sea fish">
                                      <img src="images/images_sm/fish.jpg" 
                                           alt="Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/bigwheel.jpg" rel="prettyPhoto" 
                                         title="The Big Wheel in Seattle">
                                       <img src="images/images_sm/bigwheel.jpg" 
                                            alt="Big Wheel Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/pinkflower.jpg" rel="prettyPhoto" 
                                         title="Pink Sweat Pea Flowers">
                                       <img src="images/images_sm/pinkflower.jpg" 
                                            alt="Pink Sweet Pea Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/lookingglass.jpg" rel="prettyPhoto" 
                                         title="The sky over the Seattle waterfront">
                                       <img src="images/images_sm/lookingglass.jpg" 
                                            alt="Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/sunflower6.jpg" rel="prettyPhoto" 
                                         title="Sunflower #6">
                                       <img src="images/images_sm/sunflower6.jpg" 
                                            alt="Sunflower Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/traintracks.jpg" rel="prettyPhoto" 
                                         title="Traintracks">
                                       <img src="images/images_sm/traintracks.jpg" 
                                            alt="Traintracks Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/trees.jpg" rel="prettyPhoto" 
                                         title="Trees">
                                       <img src="images/images_sm/trees.jpg" 
                                            alt="Trees Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/view.jpg" rel="prettyPhoto" 
                                         title="Beautiful View">
                                       <img src="images/images_sm/view.jpg" 
                                            alt="Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/seagull.jpg" rel="prettyPhoto" 
                                         title="Seagull">
                                       <img src="images/images_sm/seagull.jpg" 
                                            alt="Seagull Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/dandilion.jpg" rel="prettyPhoto" 
                                         title="Dandilion">
                                       <img src="images/images_sm/dandilion.jpg" 
                                            alt="Dandilion Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/bird.jpg" rel="prettyPhoto" 
                                         title="Bird">
                                       <img src="images/images_sm/bird.jpg" 
                                            alt="Bird Photo &copy; www.adaflerphotography.com"></a></div>
            </div>

            <div class="clear"></div>

            <div class="flex-container">
               <div class="flex-item"><a href="images/images_lg/spaceneedle2.jpg" rel="prettyPhoto" 
                                         title="Space Needle 2">
                                       <img src="images/images_sm/spaceneedle2.jpg" 
                                            alt="Space Needle 2 photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/riverrainbow.jpg" rel="prettyPhoto" 
                                         title="Rainbow overlooking a river">
                                       <img src="images/images_sm/riverrainbow.jpg" 
                                            alt="Rainbow overlooking a river photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/purpleflower.jpg" rel="prettyPhoto"
                                         title="Purple Bachelor Button Flower">
                                      <img src="images/images_sm/purpleflower.jpg" 
                                           alt="Purple Bachelor Button Flower Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/spaceneedle.jpg" rel="prettyPhoto" 
                                         title="Space Needle through the trees">
                                       <img src="images/images_sm/spaceneedle.jpg" 
                                            alt="Space Needle Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/sunflower1.jpg" rel="prettyPhoto"
                                         title="Beautiful Sunflower">
                                      <img src="images/images_sm/sunflower1.jpg" 
                                           alt="Sunflower Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/highsteel.jpg" rel="prettyPhoto"
                                         title="High Steel Bridge">
                                      <img src="images/images_sm/highsteel.jpg" 
                                           alt="High Steel Bridge Photo &copy; www.adaflerphotography.com"></a></div>
               <div class="flex-item"><a href="images/images_lg/purpleflower2.jpg" rel="prettyPhoto" 
                                         title="Purple Flower #2">
                                       <img src="images/images_sm/purpleflower2.jpg" 
                                            alt="Purple Flower #2 Photo &copy; www.adaflerphotography.com"></a></div>
            </div>
         </section>

         <?php include "php/nav_menu.php"; ?> <!-- Adds Nav Menu -->

<!-- ============================================================ Footer ============================================================ -->
         <footer>
            <?php include "php/footer.php" ?>
         </footer>
      </section>
   </body>
</html>