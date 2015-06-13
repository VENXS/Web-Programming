<?php require("includes/head.php");
require("includes/nav.php");

session_start();

$voucher = $_POST['voucherCode'];
// $discountedPrice = $_POST['discountedPrice'];

$_SESSION['voucherCode'][] = $voucher;
// $_SESSION['discountedPrice'][] = $discountedPrice;

?>

	<h1> Contact details </h1>
    <p> Please enter your details to complete the booking </p>

    <div id='contentVoucher'>
        <div id='customerForm'>
            <form action="checkout.php" method="POST">
                <div>
                    <label for="firstName"> First Name: </label>
                    <input type="text" id="textf" name="firstName" pattern="^[A-Z][a-zA-Z '&-]*[A-Za-z]$" required/>
                </div>
                <div>
                    <label for="lastName"> Last Name: </label>
                    <input type="text" id="textf" name="lastName" pattern="^[A-Z][a-zA-Z '&-]*[A-Za-z]$" required/>
                </div>
                <div>
                    <label for="emailAdd"> Email: </label>
                    <input type="email" id="textf" name="emailAdd" required/>
                    <!-- <input type="text" id="textf" name="emailAdd" patter="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$" required/> -->
                </div>
                <div>
                    <label for="phoneNumber"> Phone Number: </label>
                    <input type="text" id="textf" name="phoneNumber" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" required/>
                </div>
<br><br>
</div>              
			  <input type="submit" id="button" value="Next">
            </form>
        
<br><br>
        <form action="reset.php">
            <input type="submit" id="button" value="Clear details">
        </form>
    </div>
    <br><br>


<?php
require("includes/footer.php");
?>