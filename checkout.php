<?php require("includes/head.php");
require("includes/nav.php");

session_start();

if(isset($_POST) && !empty($_POST)) {
    }

$customer = array(
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'emailAdd' => $_POST['emailAdd'],
    'phoneNumber' => $_POST['phoneNumber']
);

$_SESSION['customer'][] = $customer;
if(isset($_SESSION)) {
}

function movieTitle()
{
    if ($_SESSION['film'] === 'AF') {
        echo "Mardaani";
    }
    if ($_SESSION['film'] === 'CH') {
        echo "Planes: Fire and Rescue";
    }
    if ($_SESSION['film'] === 'RC') {
        echo "Once a Princess";
    }
    if ($_SESSION['film'] === 'AC') {
        echo "Guardians of the Galaxy";
    }
}

// show the discounted price
// customer name, email, phone, screening (movie, day, time), seat info (ticket type, price), total price, voucher code if valid,

?>


<h1> Check out </h1>
<p> Please confirm the following information to complete the checkout </p>

<div id = "checkOut">
<?php
//calculate price in PHP

movieTitle();

$discountedPrice = 40;

echo "<p>You have booked " . ($_SESSION['SA'] + $_SESSION['SP'] + $_SESSION['SC'] + $_SESSION['FC'] + $_SESSION['FA'] + $_SESSION['B1'] + $_SESSION['B2'] + $_SESSION['B3']) . " tickets on " . $_SESSION['day'] . " for " . $customer['firstName'] . " " . $customer['lastName'] . ". </p>";
echo "The total cost comes to $" . $discountedPrice ;

?>
</div>



<form action="tickets.php">
    <input type="submit" id="button" value="Next">
</form>

<form action="book.php">
    <input type="submit" id="button" value="Add another screening">
</form>


<?php

//$myfile = fopen("./newfile.txt", "a");
// fwrite($myfile, implode(",", $_SESSION));
// fclose($myfile);


file_put_contents("./booking.text", $_SESSION, FILE_APPEND);
?>

<?php require("includes/footer.php"); ?>