<?php require("includes/head.php");
require("includes/nav.php");

session_start();

if(isset($_POST) && !empty($_POST)) {
    var_dump($_POST);
}

$customer = array(
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'emailAdd' => $_POST['emailAdd'],
    'phoneNumber' => $_POST['phoneNumber']
);

$_SESSION['customer'][] = $customer;
if(isset($_SESSION)) {
    var_dump($_SESSION);
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

movieTitle();

// show the discounted price
// customer name, email, phone, screening (movie, day, time), seat info (ticket type, price), total price, voucher code if valid,

?>



<h2> Please confirm the following information to complete the checkout </h2>
    <img src="${poster}" width="200px">

<div id = "checkOut">
<?php

//calculate price in PHP

movieTitle();

echo "<p>You have booked " . ($_SESSION['SA'] + $_SESSION['SP'] + $_SESSION['SC'] + $_SESSION['FC'] + $_SESSION['FA'] + $_SESSION['B1'] + $_SESSION['B2'] + $_SESSION['B3']) . " tickets on " . $_SESSION['day'] . " for " . $customer['firstName'] . " " . $customer['lastName'] . ". </p>";
echo "It will cost " . $price ;

?>
</div>

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
    <input type="submit" value="Next">
</form>

<form action="book.php">
    <input type="submit" value="Add another screening">
</form>


<?php

$myfile = fopen("./newfile.txt", "a");
fwrite($myfile, implode(",", $_SESSION));
fclose($myfile);


// file_put_contents("./booking.text", $_SESSION, FILE_APPEND);
?>

<?php require("includes/footer.php"); ?>