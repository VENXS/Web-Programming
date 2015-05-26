<?php require("includes/head.php");
require("includes/nav.php");

session_start();

$_SESSION = array(
'film' => $_POST['film'],
'day' => $_POST['day'],
    'time' => $_POST['time'],
    'SA' => $_POST['SA'],
    'SP' => $_POST['SP'],
    'SC' => $_POST['SC'],
    'FA' => $_POST['FA'],
    'B1' => $_POST['B1'],
    'B2' => $_POST['B2'],
    'B3' => $_POST['B3'],
    'subTotal' =>$_POST['subTotal']
);

var_dump($_SESSION);

?>

<h1> Voucher </h1>

<div id="contentVoucher">
<form id="voucherCode" action="customer.php" method="POST">
    Voucher Number: <input type="text" name="voucherCode" pattern="^\d{5}-\d{5}-[A-Z]{2}$" required
                           title="Please enter a valid voucher code"> <br>
    <input type="submit" value="Next">
</form>
</div>
    <!-- validate voucher - onclick = jQuery calculate the new price $totalPrice * .8 = $discountedPrice

    EG: $_POST[‘voucher’]; -> this will depend what you name your input field <input type=”text” name=”voucher”/>
    write a function which grabs the voucher code
    if (voucher == 0199192, voucher == 3488483) { print true?}
    -->


    <script>
        console.log($_SESSION['subTotal']);

        $("voucherCode").change(function(){
            if (voucherCode === true) {
                console.log('Your voucher is correct. Your discount has been applied.');
                $discountedPrice = $subTotal * .8
                console.log('You\'re new subtotal is'. $discountedPrice);
            }
            else {
                console.log('That voucher number is not valid');
            }
        });

    </script>
<br><br>





<?php

require("includes/footer.php");

?>
