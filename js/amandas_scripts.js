/*
Author:          Shane Skinner
Date:            12-16-2013
Updated:         01-08-2014
Program:         Amanda Dafler's Photography Site
Description:     Scripts for Amanda's Photography Site
*/

// Slideshow
$(document).ready(function() {
   $("#slideshow > div:gt(0)").hide();

   setInterval(function() { 
      $('#slideshow > div:first')
      .fadeOut(1000)
      .next()
      .fadeIn(1000)
      .end()
      .appendTo('#slideshow');
   },  3000);
});