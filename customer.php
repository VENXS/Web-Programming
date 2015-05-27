<?php require("includes/head.php");
require("includes/nav.php");

session_start();

$voucher = array(
    'voucherCode' => $_POST['voucherCode'],
);

$_SESSION['voucherCode'][] = $voucher;

// values from form into session array
// $Customer = array('firstname' => $personName,
?>


    <h1> Please Enter your details to complete the booking </h1>

    <div id='contentVoucher'>
        <div id='customerForm'>
            <form action="checkout.php" method="POST">
                <div>
                    <label for="firstName"> First Name: </label>
                    <input type="text" name="firstName" pattern="^[A-Z][a-zA-Z '&-]*[A-Za-z]$" required/>
                </div>
                <div>
                    <label for="lastName"> Last Name: </label>
                    <input type="text" name="lastName" patter="^[A-Z][a-zA-Z '&-]*[A-Za-z]$" required/>
                </div>
                <div>
                    <label for="emailAdd"> Email: </label>
                    <input type="text" name="emailAdd" patter="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$" required/>
                </div>
                <div>
                    <label for="phoneNumber"> Phone Number: </label>
                    <input type="text" name="phoneNumber" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" required/>
                </div>

                <input type="submit" value="Next">
            </form>
        </div>

        <form action="reset.php">
            <input type="submit" value="Clear details">
        </form>
    </div>
    <br><br>


<?php
require("includes/footer.php");
?>