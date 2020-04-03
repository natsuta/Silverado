<?php include_once('header.php'); ?>
	<title>Welcome to Silverado</title>
	<link rel="stylesheet" type="text/css" href="wireframe.css">
<?php include_once('nav.php'); ?>

<main>
	<h2>
	<a href="ticketinfo.php#tickets">Ticket Details</a><br>
	<a href="ticketinfo.php#times">Session Times</a><br>
	<a href="#movies">Movies</a><br>
	<a href="#bookings">Book tickets</a><br>
	</h2>
	
	<div id="movies">
		<!-- Images sourced from https://images.google.com/ and made to scale for educational purposes only -->
		<h2>Movies</h2>
		<!--movie 1-->
		<div class="movie">
			<div class="movieimg">
				<img src="images/nightwatch-vert.jpg" alt="night watch" height="300" width="230">
			</div>
			
			<div class="moviedetails">
				<h3>NIGHT WATCH</h3> <!-- Not current - released in 2004 -->
				<p><em>MA15+ | 114 min <br>Foreign fantasy film</em></p>
				<p>A fantasy-thriller set in present-day Moscow where the respective forces that control daytime and nighttime do battle.</p>
				<!-- Sourced from http://www.imdb.com/title/tt0403358/ -->
			</div>
		</div>
			
		<!--movie 2-->
		<div class="movie">
			<div class="movieimg">
				<img src="images/bossbaby-vert.jpg" alt="THE BOSS BABY" height="300" width="230">
			</div>
			
			<div class="moviedetails">
				<h3>THE BOSS BABY</h3>
				<p><em>G | 97 min <br>Childrens/comedy film</em></p>
				<p>A suit-wearing, briefcase-carrying baby pairs up with his 7-year old brother to stop the dastardly plot of the CEO of Puppy Co.</p>
				<!-- Sourced from http://www.imdb.com/title/tt3874544/ -->
			</div>
		</div>
	
		<!--movie 3-->
		<div class="movie">
			<div class="movieimg">
				<img src="images/Wonder-Woman_vert.jpg" alt="WONDER WOMAN" height="300" width="230">
			</div>
			
			<div class="moviedetails">
				<h3>WONDER WOMAN</h3>
				<p><em>M | 141 min <br>Fantasy/Action fiction film</em></p>
				<p>Before she was Wonder Woman, she was Diana, princess of the Amazons, trained warrior. When a pilot crashes and tells of conflict in the outside world, she leaves home to fight a war, discovering her full powers and true destiny. </p>
				<!-- Sourced from http://www.imdb.com/title/tt0451279/ -->
			</div>
		</div>
		
		<!--movie 4-->
		<div class="movie">
			<div class="movieimg">
				<img src="images/bigsick-vert.jpg" alt="The big sick" height="300" width="230">
			</div>

			<div class="moviedetails">
				<h3>THE BIG SICK</h3>
				<p><em>M | 119 min <br>Romantic Comedy film</em></p>
				<p>Pakistan-born comedian Kumail Nanjiani and grad student Emily Gardner fall in love but struggle as their cultures clash. When Emily contracts a mysterious illness, Kumail finds himself forced to face her feisty parents, his family's expectations, and his true feelings.</p>
				<!-- Sourced from http://www.imdb.com/title/tt5462602/ -->
			</div>
		</div>
		<p><a href="#top">Back to top</a></p>
	</div>

<?php include_once("bookingform.php");?>	

<p><a href="#top">Back to top</a></p>
</main>
<?php
	include_once("/home/eh1/e54061/public_html/wp/debug.php");
	include_once('footer.php');
?>
</body>
</html>