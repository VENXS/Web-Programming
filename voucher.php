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
    'FC' => $_POST['FC'],
    'B1' => $_POST['B1'],
    'B2' => $_POST['B2'],
    'B3' => $_POST['B3'],
);
?>

<h1> Voucher </h1>

<p> Enter a valid voucher code to get 20% off the movie price. </p>
<div id="contentVoucher">
    <form id="voucherCode" action="customer.php" method="POST">
        Voucher Number: <input type="text" name="voucherCode" id="textf" pattern="^\d{5}-\d{5}-[A-Z]{2}$" 
                               onchange="disPrice()" title="Please enter a valid voucher code"> <br><br>
        <input type="submit" id="button" value="Next"> <br><br>
    </form>

    <div id="discounted">
        <p> The subtotal </p>
    </div>
    <script>
        var quantity = 10;
        var prices = 4.5;

        var subTotal = prices * quantity;

        function subPrice(prices, quantity) {
            document.getElementById("discounted").innerHTML = "You're subtotal is: $" + subTotal;
        }
        subPrice();

        var discount = .80;
        var discountedPrice = subTotal * discount;

        function disPrice(subTotal, discount) {
            if (voucherCode) {
                document.getElementById("discounted").innerHTML = "You're new subtotal is $" + discountedPrice;
                $.post('discountedPrice');
            }
        }
        ;
    </script>
</div>

<script>
    console.log($_SESSION['subTotal']);

    $("voucherCode").change(function () {
        if (voucherCode === true) {
            console.log('Your voucher is correct. Your discount has been applied.');
            $discountedPrice = $subTotal * .8
            console.log('You\'re new subtotal is'.$discountedPrice);
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
