<?php include_once('header.php'); ?>
	<title>Welcome to Silverado</title>
	<link rel="stylesheet" type="text/css" href="wireframe.css">
<?php include_once('nav.php'); ?>

<main>
<?php 
    if(isset($_SESSION['custdetails'])) {
        unset($_SESSION['custdetails']);
}?>    

    
<form action="checkout.php" method='post'>
<fieldset>
    <legend><h3>Customer Details</h3></legend>
    <p><label>Name: </label><input type="text" name="name" required placeholder="eg: John Smith" pattern="^[a-zA-Z \-.']+$" title="Letters, spaces, - and ' only"></input></p>
    <p><label>Email: </label><input type"email" name="email" required placeholder="Enter your email address"></input></p>
    <p><label>Mobile Number: </label><input type"text" name="mobile" required placeholder="Enter your mobile number" pattern="^(\(04\)|04|\+614)([ ]?\d){8}$" title="Australian mobile numbers only"></input></p>
    <input type='submit' value"Book">
</fieldset>
</form>

</main>
<?php
    include_once("/home/eh1/e54061/public_html/wp/debug.php");
    include_once('footer.php'); 
?>
</body>
</html>