<?php require("includes/head.php");
require("includes/nav.php");

session_start();

/*
if(!empty($_SESSION['firstname'])){
    $firstname = $_SESSION['firstname'];
}
else {

    }

$firstname = $_POST['firstname'];
echo "<p>First name is: " . $firstname . "</p>";

if (isset($_POST['lastname'])) {
$lastname = $_POST['lastname'];
echo "<p>Last name is: " . $lastname . "</p>";

if (!empty($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
$email = $_POST['email'];
echo "<p>Email address is: " . $email . "</p>";
*/

// $email = "john.doe@example.com";

// validate
// if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//    echo("$email is a valid email address");
// } else {
//    echo("$email is not a valid email address");
// }

/*
if (is_numeric($_POST['age'])) {
    $age = $_POST['age'];
    echo '<p>Age : ' . $age . '</p>';

    if (isset($_POST['age']) && !empty($_POST['age']) && is_numeric($_POST['age'])){
        $age = $_POST['age'];
        echo '<p>Age (all three checks): ' . $age . '</p>';

        $_SESSION['post'] = $_POST;

        if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
            $_SESSION['myForm']['firstname'] = $_POST['firstname'];
            */


// values from form into session array
// $Customer = array('firstname' => $personName,
    ?>



<h1> Please Enter your details to complete the booking </h1>

<form action="checkout.php" method="POST">
    First Name: <input type="text" name="firstname" pattern="^[A-Z][a-zA-Z '&-]*[A-Za-z]$" required><br>
    Last Name: <input type="text" name="lastname" pattern="^[A-Z][a-zA-Z '&-]*[A-Za-z]$" required><br>
    Email: <input type="text" name="email" pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$" required><br>
    Phone Number: <input type="text" name="phone" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" required><br>
   <input type="submit" value="Next">
</form>

    <form action="reset.php">
        <input type="submit" value="Clear details">
    </form>


<?php

/*
if ( !isset ($_POST['firstname']) &&
    !isset ($_POST['lastname']) &&
    !isset ($_POST['email']) &&
    !isset ($_POST['phone']))
{
    echo'You must fill all fields !<a href="#';
}
*/

require("includes/footer.php");
    ?>