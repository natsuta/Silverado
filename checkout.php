<?php include_once('header.php'); ?>
	<title>Welcome to Silverado</title>
	<link rel="stylesheet" type="text/css" href="wireframe.css">
<?php include_once('nav.php'); ?>
<main>
    <?php 
    
    if(isset($_POST['name'])){
        if(!isset($_SESSION['custdetails'][0])){
            $_SESSION['custdetails'][] = $_POST;
        }
    }
    
?>

<!-- CSV writing -->
<?php
    $file=fopen("orders.csv", "a+");
    flock($file, LOCK_EX);
    $customer = array();
    $contents = array();
    $seating = array();
    $data = array();    

    for ($i=0; $i<count($_SESSION['cart']); $i++){
        foreach($_SESSION['custdetails'] as $custdetails => $fields){
            $customer = $fields;
        }
        foreach($_SESSION['cart'] as $cart => $fields){
            $contents = $fields;
        }
        foreach($_SESSION['cart'][$i] as $seats => $fields){
            $seating = $fields;
        }
	$data = array_merge($customer,$contents,$seating);
	fputcsv($file, $data);
    }
    
    flock($file, LOCK_UN);
    fclose($file);

// Receipt
    echo "<h3>Silverado</h3>";
    echo "<h3>Receipt</h3>";
    echo "<div class='receipt'><p>";
        foreach($_SESSION['custdetails'][0] as $custdetails => $fields){
            echo "$fields", "<br/>";
    }
    echo "</p>";
    for ($i=0; $i<count($_SESSION['cart']); $i++){
            echo "<h3>";
            switch($_SESSION['cart'][$i]['movie']){
                case "AF":
                        echo "Night Watch (MA15+)";
                        break;
                case "CH":
                        echo "The Boss Baby (G)";
                        break;
                case "AC":
                        echo "Wonder Woman (M)";
                        break;
                case "RC":
                        echo "The Big Sick (M)";
                        break;
            }
            echo "</h3>";
            echo "<p>";
            switch($_SESSION['cart'][$i]['session']){
                case "MON-13":
                        echo "Monday 1:00 PM";
                        break;
                case "TUE-13":
                        echo "Tuesday 1:00 PM";
                        break;
                case "WED-13":
                        echo "Wednesday 1:00 PM";
                        break;
                case "THU-13":
                        echo "Thursday 1:00 PM";
                        break;
                case "FRI-13":
                        echo "Friday 1:00 PM";
                        break;
                case "MON-16":
                        echo "Monday 4:00 PM";
                        break;
                case "TUE-16":
                        echo "Tuesday 4:00 PM";
                        break;
                case "WED-18":
                        echo "Wednesday 6:00 PM";
                        break;
                case "THU-18":
                        echo "Thursday 6:00 PM";
                        break;
                case "FRI-18":
                        echo "Friday 6:00 PM";
                        break;
                case "MON-20":
                        echo "Monday 8:00 PM";
                        break;
                case "TUE-20":
                        echo "Tuesday 8:00 PM";
                        break;
                case "WED-21":
                        echo "Wednesday 9:00 PM";
                        break;
                case "THU-21":
                        echo "Thursday 9:00 PM";
                        break;
                case "FRI-21":
                        echo "Friday 9:00 PM";
                        break;
                case "SAT-12":
                        echo "Saturday 12:00 PM";
                        break;
                case "SUN-12":
                        echo "Sunday 12:00 PM";
                        break;
                case "SAT-15":
                        echo "Saturday 3:00 PM";
                        break;
                case "SUN-15":
                        echo "Sunday 3:00 PM";
                        break;
                case "SAT-18":
                        echo "Sunday 6:00 PM";
                        break;
                case "SUN-18":
                        echo "Sunday 6:00 PM";
                        break;
                case "SAT-21":
                        echo "Saturday 9:00 PM";
                        break;
                case "SUN-21":
                        echo "Sunday 9:00 PM";
                        break;
            }
            echo "</p>";
            
            $cheaper = ["MON-13", "TUE-13", "WED-13", "THU-13", "FRI-13",
            "MON-16", "TUE-16", "MON-20", "TUE-20"];
            $DiscountSession = false;
            for ($j=0; $j<count($cheaper); $j++){
                if ($_SESSION['cart'][$i]['session'] == $cheaper[$j])
                    $DiscountSession = true;
            }
            
            $price;
	    $SFSubtotal = 0;
	    $SPSubtotal = 0;
	    $SCSubtotal = 0;
	    $FASubtotal = 0;
	    $FCSubtotal = 0;
	    $BASubtotal = 0;
	    $BFSubtotal = 0;
	    $BCSubtotal = 0;

            echo "<div class='seat'>";
            echo "<table border=1>";
            echo "<tr>
                    <th class='tkt'>Ticket Type</th>
            		<th class='price'>Price</th>
            		<th class='qty'>Quantity</th>
            		<th class='subtotal'>Subtotal</th>
    		</tr>";
    		echo "<tr>";
            foreach ($_SESSION['cart'][$i]['seats'] as $seats => $qty){
                switch ($seats){
                    case "SF":
                        if ($qty == 0)
                            break;
                        echo "<td>Standard (Full)</td>";
                        if ($DiscountSession == true)
                            $price = 12.50;
                        else
                            $price = 18.50;
                        echo "<td>";
                        printf("$%.2f",$price);
                        echo "</td>";
                        echo "<td>", $qty, "</td>";
                        $SFSubtotal = $qty * $price;
                        echo "<td>";
                        printf("$%.2f",$SFSubtotal);
                        echo "</td>";
                        break;
                    case "SP":
                        if ($qty == 0)
                            break;
                        echo "<td>Standard (Concession)</td>";
                        if ($DiscountSession == true)
                            $price = 10.50;
                        else
                            $price = 15.50;
                        echo "<td>";
                        printf("$%.2f",$price);
                        echo "</td>";
                        echo "<td>", $qty, "</td>";
                        $SPSubtotal = $qty * $price;
                        echo "<td>";
                        printf("$%.2f",$SPSubtotal);
                        echo "</td>";
                        break;
                    case "SC":
                        if ($qty == 0)
                            break;
                        echo "<td>Standard (Child)</td>";
                        if ($DiscountSession == true)
                            $price = 8.50;
                        else
                            $price = 12.50;
                        echo "<td>";
                        printf("$%.2f",$price);
                        echo "</td>";
                        echo "<td>", $qty, "</td>";
                        $SCSubtotal = $qty * $price;
                        echo "<td>";
                        printf("$%.2f",$SCSubtotal);
                        echo "</td>";
                        break;
                    case "FA":
                        if ($qty == 0)
                            break;
                        echo "<td>First Class (Adult)</td>";
                        if ($DiscountSession == true)
                            $price = 25.00;
                        else
                            $price = 30.00;
                        echo "<td>";
                        printf("$%.2f",$price);
                        echo "</td>";
                        echo "<td>", $qty, "</td>";
                        $FASubtotal = $qty * $price;
                        echo "<td>";
                        printf("$%.2f",$FASubtotal);
                        echo "</td>";
                        break;
                    case "FC":
                        if ($qty == 0)
                            break;
                        echo "<td>First Class (Child)";
                        if ($DiscountSession == true)
                            $price = 20.00;
                        else
                            $price = 25.00;
                        echo "<td>";
                        printf("$%.2f",$price);
                        echo "</td>";
                        echo "<td>", $qty, "</td>";
                        $FCSubtotal = $qty * $price;
                        echo "<td>";
                        printf("$%.2f",$FCSubtotal);
                        echo "</td>";
                        break;
                    case "BA":
                        if ($qty == 0)
                            break;
                        echo "<td>Beanbag (Adult)</td>";
                        if ($DiscountSession == true)
                            $price = 22.00;
                        else
                            $price = 33.00;
                        echo "<td>";
                        printf("$%.2f",$price);
                        echo "</td>";
                        echo "<td>", $qty, "</td>";
                        $BASubtotal = $qty * $price;
                        echo "<td>";
                        printf("$%.2f",$BASubtotal);
                        echo "</td>";
                        break;
                    case "BF":
                        if ($qty == 0)
                            break;
                        echo "<td>Beanbag (Family)</td>";
                        if ($DiscountSession == true)
                            $price = 20.00;
                        else
                            $price = 30.00;
                        echo "<td>";
                        printf("$%.2f",$price);
                        echo "</td>";
                        echo "<td>", $qty, "</td>";
                        $BFSubtotal = $qty * $price;
                        echo "<td>";
                        printf("$%.2f",$BFSubtotal);
                        echo "</td>";
                        break;
                    case "BC":
                        if ($qty == 0)
                            break;
                        echo "<td>Beanbag (Child)</td>";
                        if ($DiscountSession == true)
                            $price = 20.00;
                        else
                            $price = 30.00;
                        echo "<td>";
                        printf("$%.2f",$price);
                        echo "</td>";
                        echo "<td>", $qty, "</td>";
                        $BCSubtotal = $qty * $price;
                        echo "<td>";
                        printf("$%.2f",$BCSubtotal);
                        echo "</td>";
                        break;
                }
            echo "</tr>";
            }
            echo "<tr>";
            $Total = $SFSubtotal+$SPSubtotal+$SCSubtotal+$FASubtotal+$FCSubtotal+
            $BASubtotal+$BFSubtotal+$BCSubtotal;
            echo "<td colspan=3 align=right>Total: </td>";
            echo "<td>";
            printf("$%.2f",$Total);
            echo"</td>";
            echo "</tr>";
            echo "</table>";
            echo "</div>";
            echo "<hr />";
            echo "</div>";
        }

    echo "<h3>Tickets</h3><hr/>";
    //Tickets
    for ($i=0; $i<count($_SESSION['cart']); $i++){
            foreach ($_SESSION['cart'][$i]['seats'] as $seats => $qty){
                for ($j=0; $j<$qty; $j++){
                    echo "<div class='ticket'>";
                    echo "<p>";
                    echo "Silverado <br/>";
                    switch($_SESSION['cart'][$i]['movie']){
                        case "AF":
                                echo "Night Watch (MA15+)";
                                break;
                        case "CH":
                                echo "The Boss Baby (G)";
                                break;
                        case "AC":
                                echo "Wonder Woman (M)";
                                break;
                        case "RC":
                                echo "The Big Sick (M)";
                                break;
                    }
                    echo "<br/>";
                    switch($_SESSION['cart'][$i]['session']){
                        case "MON-13":
                                echo "Monday 1:00 PM";
                                break;
                        case "TUE-13":
                                echo "Tuesday 1:00 PM";
                                break;
                        case "WED-13":
                                echo "Wednesday 1:00 PM";
                                break;
                        case "THU-13":
                                echo "Thursday 1:00 PM";
                                break;
                        case "FRI-13":
                                echo "Friday 1:00 PM";
                                break;
                        case "MON-16":
                                echo "Monday 4:00 PM";
                                break;
                        case "TUE-16":
                                echo "Tuesday 4:00 PM";
                                break;
                        case "WED-18":
                                echo "Wednesday 6:00 PM";
                                break;
                        case "THU-18":
                                echo "Thursday 6:00 PM";
                                break;
                        case "FRI-18":
                                echo "Friday 6:00 PM";
                                break;
                        case "MON-20":
                                echo "Monday 8:00 PM";
                                break;
                        case "TUE-20":
                                echo "Tuesday 8:00 PM";
                                break;
                        case "WED-21":
                                echo "Wednesday 9:00 PM";
                                break;
                        case "THU-21":
                                echo "Thursday 9:00 PM";
                                break;
                        case "FRI-21":
                                echo "Friday 9:00 PM";
                                break;
                        case "SAT-12":
                                echo "Saturday 12:00 PM";
                                break;
                        case "SUN-12":
                                echo "Sunday 12:00 PM";
                                break;
                        case "SAT-15":
                                echo "Saturday 3:00 PM";
                                break;
                        case "SUN-15":
                                echo "Sunday 3:00 PM";
                                break;
                        case "SAT-18":
                                echo "Sunday 6:00 PM";
                                break;
                        case "SUN-18":
                                echo "Sunday 6:00 PM";
                                break;
                        case "SAT-21":
                                echo "Saturday 9:00 PM";
                                break;
                        case "SUN-21":
                                echo "Sunday 9:00 PM";
                                break;
                    }
                    echo "<br/><br/>";
                    switch ($seats){
                        case "SF":
                            echo "Standard (Full)";
                            break;
                        case "SP":
                            echo "Standard (Concession)";
                            break;
                        case "SC":
                            echo "Standard (Child)";
                            break;
                        case "FA":
                            echo "First Class (Adult)";
                            break;
                        case "FC":
                            echo "First Class (Child)";
                            break;
                        case "BA":
                            echo "Beanbag (Adult)";
                            break;
                        case "BF":
                            echo "Beanbag (Family)";
                            break;
                        case "BC":
                            echo "Beanbag (Child)";
                            break;
                    }
                    echo "<hr />";
                }
                echo "</p>";
            }
            echo "</div>";
            echo "</div>";
        }
?>
</main>
<?php
    include_once("/home/eh1/e54061/public_html/wp/debug.php");
    include_once('footer.php'); 
?>
</body>
</html>