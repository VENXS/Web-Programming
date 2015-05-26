<?php require("includes/head.php");
require("includes/nav.php");

session_start();

if(isset($_POST) && !empty($_POST)){
    var_dump($_POST);
};

$customer = array (
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone']
);

$_SESSION['customer'][] = $customer;

var_dump($_SESSION);

// show the discounted price
// customer name, email, phone, screening (movie, day, time), seat info (ticket type, price), total price, voucher code if valid,

?>

<h1> Please confirm the following information to complete the checkout </h1>

<img src="cinema-girl.jpg" alt="Image" width="200px">

<?php

//$_SESSION['quantity'] = $_SESSION['SA' + 'SP' ];

//calculate price in PHP

echo "<p>You have booked " . $_SESSION['quantity'] . " tickets for " . $_SESSION['film'] . " on " . $_SESSION['day'] . "</p>";
?>

<script>
    $.ajax({
        dataType: "json",
        method: "POST",
        url: "https://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/movie-service.php"
    })
        .done(function (data) {
            $.each(data, function (key, val) {
                $.get("includes/movietemplate.html", function (template) {
                    $.tmpl(template, val).appendTo("#movies");
                    console.log(data);
                });
            });
        });

</script>


<form action="tickets.php">
    <input type="submit" value="Buy Now">
</form>

<form action="book.php">
    <input type="submit" value="Add another screening">
</form>


<?php

/*
$myfile = fopen("./newfile.txt", "a");
fwrite($myfile, implode(",", $_SESSION));
fclose($myfile);
*/

file_put_contents("./booking.text", $_SESSION, FILE_APPEND);
?>

<?php require("includes/footer.php"); ?>