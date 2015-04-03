<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- ========================================
         Project:		        Contact page for Amanda Dafler's Photography Site
         File Name:		      contact.php
         Author:		        Shane Skinner
         Date Created:		  01-23-2014
	       Last Revised:		  04-03-2015
         File Location:		  C:\Users\Shane\Documents\Professional\My Web Sites\Amanda's Photography Website\Website Files
         Supporting Files:	amandas_styles.css
      ========================================= -->

<!-- =============== Meta Data =============== -->
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="Shane Skinner" />
      <meta name="description" content="This is the photo gallery site for an amateur, aspiring photographer, Amanda Dafler. 
                                        Amanda lives in beautiful North Bend, Washington, (USA) and loves taking photos of nature, 
                                        wildlife, people, and more." />
      <meta name="keywords" content="contact, email, photographer, photography, photos, photo, gallery, photo gallery, 
                                     picture, pictures, pic, pics, North Bend, Washington, Snoqualmie, Snoqualmie valley, 
                                     Seattle, wildlife, nature, mountain, mount, rainer, people, wedding, senior, 
                                     portraits, party, photographer in Washington, Fall City, Carnation, Issaquah, Bellevue" />
      <meta name="classification" content="Photography" />
      <meta name="owner" content="Amanda Dafler" />
      <meta name="reply-to" content="adafler@hotmail.com" />
      <meta name="geo.region" content="US-WA" />
      <meta name="geo.placename" content="North Bend" />
      <meta name="geo.position" content="47.495658;-121.786777" />
      <meta name="ICBM" content="47.495658, -121.786777" />

      <title>Contact Amanda</title>

<!-- =============== Link to External Stylesheet(s) and Internal Styles =============== -->     
      <link href="css/contact_styles.css" rel="stylesheet" type="text/css" media="screen" />
      <link href="css/amandas_styles.css" rel="stylesheet" type="text/css" media="screen" />

<!-- =============== External and Internal Scripts =============== --> 
      <script src="js/spam.js" type="text/javascript"></script>

      <script type="text/javascript">
         function showEM(userName, emServer) {
            userName = stringReverse(userName);
            emServer = stringReverse(emServer);
            var at = "@";
            var emLink = userName + at + emServer;

            document.write("<a href='mailto:" + emLink + "'>");
            document.write(emLink);
            document.write("</a>");
         }
      </script>

   </head>

<!-- ================================================== Page Body ================================================== -->
    <body>
      <!-- =============== Google Analytics =============== -->
      <?php include_once("analyticstracking.php") ?>
      
      <section class="page">
<!-- ========================= Header ========================= -->
        <section class="heading">
          <header>
            <h1>About Amanda Dafler</h1>
          </header>
        </section>

        <section class="leftSidebar">
          <div id="sidebarimage"></div> <!-- <img src="images_sm/sunflower.jpg" alt="Sunflower"> -->
        </section>

        <section class="contactmain">
          <article>Thank you for visiting my website! I am an aspiring photographer located in the beautiful state of 
                   Washington. I enjoy photography in my free time and specialize in landscape and nature photography. 
                   My goal is to travel the world and capture its beauty to share with you. I hope you enjoy my 
                   photographs as much as I enjoy taking them.</article>

          <article>They are all available for purchase. To do so, you can contact me by email at: 
          <p id="email">
            <script type="text/javascript">
              showEM("relfada", "moc.liamtoh");
            </script>
          </p>
          <article>- Amanda Dafler</article>
          </article>
        </section>

        <?php include "php/nav_menu.php"; ?> <!-- Adds Header with Nav Menu -->

<!-- ============================================================ Footer ============================================================ -->
        <footer>
          <?php include "php/footer.php"; ?>
        </footer>
    </section>
  </body>
</html>