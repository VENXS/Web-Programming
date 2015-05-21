<?php require("includes/head.php");
require("includes/nav.php");

session_start();


$voucher = array (
    'voucherCode' => $_POST['voucherCode'],
    );

$_SESSION['voucherCode'][] = $voucher;


/*
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
// 'lastname' => $lastName,
// 'email' => $personEmail,
// 'phone' => $phoneNuber);  --- Check if valid number using: ^(\(04\)|04|\+614)[  ]?\d{4}[  ]?\d{4}$
// store to session
// var_dump $Customer
// var_dump $Screening

// clear details button
    ?>



<h1> Please Enter your details to complete the booking </h1>

<form action="checkout.php" method="POST">
    First Name: <input type="text" name="firstname"><br>
    Last Name: <input type="text" name="lastname"><br>
    Email: <input type="text" name="email"><br>
    Phone Number: <input type="text" name="phone" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" ><br>
   <input type="submit" value="Submit">
</form>

    <form action="reset.php">
        <input type="submit" value="Clear details">
    </form>


<?php require("includes/footer.php"); ?>