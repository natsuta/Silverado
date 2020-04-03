<?php include_once('header.php'); ?>
	<title>Welcome to Silverado</title>
	<link rel="stylesheet" type="text/css" href="wireframe.css">
<?php include_once('nav.php'); ?>

<main>
    <!--slideshow-->		
		<!-- Original code sourced and adapted for educational purposes: https://www.w3schools.com/w3css/w3css_slideshow.asp and http://qnimate.com/creating-a-slider-using-html-and-css-only/#prettyPhoto -->
    	<div class="slider-holder">
            <span id="slider-image-1"></span>
            <span id="slider-image-2"></span>
            <span id="slider-image-3"></span>
            <span id="slider-image-4"></span>
            <div class="image-holder">
                <!-- Images sourced from https://images.google.com/ and made to scale for educational purposes only -->
                <img src="images/bigsick.jpg" class="slider-image" />
                <img src="images/Wonder-Woman.jpg" class="slider-image" />
                <img src="images/bossbaby.jpg" class="slider-image" />
                <img src="images/nightwatch.jpg" class="slider-image" />
            </div>
        </div>
    
	<p>A new and improved Silverado Cinema will reopen in October 2017. The cinema was closed at the end of March 2017 for renovations to bring it up to a modern standard, on par with large cinema chains in major towns. Thanks to those renovations, our cinema seating has been upgraded, with new lighting, sound and projection equipment supplied by Dolby. With new 3D projection facilities, Silverado has become the first rural cinema to screen movies in 3D, allowing viewers to experience the joy of seeing pictures with added depth. Our new cinema seating has been divided into three classes, namely Normal, First Class and Bean Bag, providing a comfortable and enjoyable experience for all.</p>

	<p>Despite our changes in the cinema, Silverado’s dedicated service will not change. We aim to provide customers with the best experience before and after you visit the cinema, with an improved online ticket ordering and feedback system, creating memorable experiences for customers.</p>

</main>
<?php
    include_once("/home/eh1/e54061/public_html/wp/debug.php");
    // Be sure to change this link when this is hosted on Titan server
    include_once('footer.php'); 
?>
</body>
</html>