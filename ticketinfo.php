<?php include_once('header.php'); ?>
	<title>Welcome to Silverado</title>
	<link rel="stylesheet" type="text/css" href="wireframe.css">
<?php include_once('nav.php'); ?>
    
<main>
  <h2>
	<a href="#tickets">Ticket Details</a><br>
	<a href="#times">Session Times</a><br>
	<a href="showing.php">Movies</a><br>
	<a href="showing.php#bookings">Book tickets</a><br>
	</h2>
	
	<div id="tickets">
		<h2>Ticket Details</h2>
		<p>All Monday and Tuesday sessions/1pm Cheaper Weekdays:</p>
			<h3>Standard seating:</h3>
				<ul>
					<li>Full (Adult): $12.50</li>
					<li>Concession/Pensioner: $10.50</li>
					<li>Child: $8.50</li>
				</ul>
			<h3>First Class:</h3>
				<ul>
					<li>Adult: $25</li>
					<li>Child: $20</li>
				</ul>
			<h3>Beanbag seating:</h3>
				<ul>
					<li>Adult: $22</li>
					<li>Family*: $20</li>
					<li>Child: $20</li>
				</ul>
				
		<p>Wednesday to Friday sessions after 1pm/All Saturday and Sunday sessions:</p>
			<h3>Standard seating:</h3>
				<ul>
					<li>Full (Adult): $18.50</li>
					<li>Concession/Pensioner: $15.50</li>
					<li>Child: $12.50</li>
				</ul>
			<h3>First Class:</h3>
				<ul>
					<li>Adult: $30</li>
					<li>Child: $25</li>
				</ul>
			<h3>Beanbag seating:</h3>
				<ul>
					<li>Adult: $33</li>
					<li>Family*: $30</li>
					<li>Child: $30</li>
				</ul>
		<p2>*One family beanbag ticket covers one adult and up to two children for the cost of a child ticket. Other adults and children must buy their own tickets.</p2>
		<p><a href="#top">Back to top</a></p>
	</div>
		
	<div id="times">
		<h2>Session Times</h2>
			<h3>Monday/Tuesday:</h3>
				<ul>
					<li>1pm - The Big Sick (M, RC)</li>
					<li>4:30pm - The Boss Baby (G, CH)</li>
					<li>8pm - Night Watch (MA15+, AF)</li>
				</ul>
			<h3>Wednesday-Friday:</h3>
				<ul>
					<li>1pm - Wonder Woman (M, AC)</li>
					<li>6pm - The Boss Baby (G, CH)</li>
					<li>9pm - The Big Sick (M, RC)</li>
				</ul>
			<h3>Saturday/Sunday:</h3>
				<ul>
					<li>12pm - The Boss Baby (G, CH)</li>
					<li>3pm - Wonder Woman (M, AC)</li>
					<li>6pm - The Big Sick (M, RC)</li>
					<li>9pm - Night Watch (MA15+, AF)</li>
				</ul>
		<p><a href="#top">Back to top</a></p>
		</div>
 
</main>
<?php
	include_once("/home/eh1/e54061/public_html/wp/debug.php");
	include_once('footer.php'); 
?>
</body>
</html>