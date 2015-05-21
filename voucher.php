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
    'B3' => $_POST['B3']
);

var_dump($_SESSION);




/*
    "seats": {
    "SA": {
        "quantity": 2,
"price": 12.00,
"seats": ["E01", "E02"]
},
"B3": {
        "quantity": 1,
"price": 20.00,
"seats": ["B02"]
}
},
"sub-total": 44.00
},
{
    "movie": "AC",
"day": "Saturday",
"time": "9pm",
"seats": {
    "SP": {
        "qty": 3,
"price": 15.00,
"seats": ["F10", "F11"]
},
"B2": {
        "qty": 1,
"price": 30.00,
"seats": ["D02"]
}
},
"sub-total": 75.00,
}
]
},
"total": $totalPrice,
"voucher": $voucherCode,
"grand-total": $discountedPrice
}
*/

if (voucherCode === " ") {
    print "Error";
}
else {
    ($_POST['voucherCode']);
}

?>

<h1> Voucher </h1>

<form action="customer.php">
    Voucher Number: <input type="text" name="voucherCode" pattern="^\d{5}-\d{5}-[A-Z]{2}$"
                           title="Please enter a valid voucher code"> <br>
    <input type="submit" value="Submit">

    <!-- validate voucher - onclick = jQuery calculate the new price $totalPrice * .8 = $discountedPrice

    EG: $_POST[‘voucher’]; -> this will depend what you name your input field <input type=”text” name=”voucher”/>
    write a function which grabs the voucher code
    if (voucher == 0199192, voucher == 3488483) { print true?}
    -->

</form>

<?php require("includes/footer.php"); ?>
