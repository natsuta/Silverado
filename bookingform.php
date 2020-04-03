<script type="text/javascript" src="booking.js"></script>
<!-- Change the center tags in the form -Sherman -->
<div id="bookings"></div>
<h2>Book tickets</h2>

<!-- Starting form code sourced and adapted from https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php -->
<noscript><p>JavaScript is required for this form to work properly. Please check your browser settings.</p></noscript>

<form action="cart.php" method='post'> 
<fieldset><legend><h3>Booking Form</h3></legend>
	<p><label>Movie </label><select id="movie" name="movie" onchange="movieChange(this, document.getElementById('session'))">
		<option>Select Movie</option>
		<option value="AF">NIGHT WATCH</option>
		<option value="CH">THE BOSS BABY</option>
		<option value="AC">WONDER WOMAN</option>
		<option value="RC">THE BIG SICK</option>
	</select>
	<label>Session</label><select id="session" name="session" 
	onchange="sessionChange(this, document.getElementById('SF'), document.getElementById('SP'), document.getElementById('SC'), 
	document.getElementById('FA'), document.getElementById('FC'), document.getElementById('BA'), document.getElementById('BF'),
	document.getElementById('BC'))"></select>

	<fieldset name="seats"><legend><h3>Seats</h3></legend>
		<fieldset><legend><h4>Standard</h4></legend>
			<p><label>Full (Adult)</label><select id="SF" name="seats[SF]" onchange="calculatePrices(this, document.getElementById('session'))">
			</select><label id="SFSubtotal"></label></p>
			<p><label>Concession*</label><select id="SP" name="seats[SP]" onchange="calculatePrices(this, document.getElementById('session'))">
			</select><label id="SPSubtotal"></label></p>
			<p><label>Child</label><select id="SC" name="seats[SC]" onchange="calculatePrices(this, document.getElementById('session'))">
			</select><label id="SCSubtotal"></label></p>
			<p>*Pensioners OK</p>
			<p id="StdSubtotal"></p>
		</fieldset>
		
		<fieldset><legend><h4>First Class</h4></legend>
			<p><label>Adult</label><select id="FA" name="seats[FA]" onchange="calculatePrices(this, document.getElementById('session'))">
			</select></p>
			<p><label>Child</label><select id="FC" name="seats[FC]" onchange="calculatePrices(this, document.getElementById('session'))">
			</select></p>
			<p id="FirstSubtotal"></p>
		</fieldset>
		
		<fieldset><legend><h4>Beanbag</h4></legend>
			<p><label>Adult</label><select id="BA" name="seats[BA]" onchange="calculatePrices(this, document.getElementById('session'))">
			</select></p>
			<p><label>Family*</label><select id="BF" name="seats[BF]" onchange="calculatePrices(this, document.getElementById('session'))">
			</select></p>
			<p><label>Child</label><select id="BC" name="seats[BC]" onchange="calculatePrices(this, document.getElementById('session'))">
			</select></p>
			<p>*One family beanbag ticket covers one adult and up to two children for the cost of a child ticket. Other adults and children must buy their own tickets.</p>
			<p id="BeanSubtotal"></p>
		</fieldset>
	</fieldset>
	<p id="Total"></p>
	<p><button>Book</button></p>
</fieldset>
</form>