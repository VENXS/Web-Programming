<!DOCTYPE HTML>
    <html>
<head>
    <title> Silverado </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="printstyle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
</head>
<body>


<?php
session_start();

?>


<div id = "print">
    <img src="logo.png" alt="logo" width="200px" />
    <h3> Ticket Receipt </h3>


<?php
echo "<p> Your movie code ticket: " . $_SESSION['film'] . ". </p>";
echo "<p> Your ticket day: " . $_SESSION['day'] . ". </p>";
echo "<p> Your ticket time: " . $_SESSION['time'] . ". </p>";

if ($_SESSION['SA'] > 0) {
    echo "<p> Your adult ticket: " . $_SESSION['SA'] . ". </p>";
}
if ($_SESSION['SP'] > 0) {
    echo "<p> Your consession ticket: " . $_SESSION['SP'] . ". </p>";
}
if ($_SESSION['FA'] > 0) {
    echo "<p> Your first class adult ticket: " . $_SESSION['FA'] . ". </p>";
}
if ($_SESSION['FC'] > 0) {
    echo "<p> Your first class child ticket: " . $_SESSION['FC'] . ". </p>";
}
if ($_SESSION ['B1'] > 0) {
    echo "<p> Your one person beanbag ticket: " . $_SESSION['B1'] . ". </p>";
}
if ($_SESSION['B2'] > 0) {
    echo "<p> Your two person beanbag ticket: " . $_SESSION['B2'] . ". </p>";
}
if ($_SESSION['B3'] > 0) {
    echo "<p> Your three person beanbag ticket: " . $_SESSION['B3'] . ". </p>";
}

$ticketQuantity = ($_SESSION['SA'] + $_SESSION['SP'] + $_SESSION['SC'] + $_SESSION['FC'] + $_SESSION['FA'] + $_SESSION['B1'] + $_SESSION['B2'] + $_SESSION['B3']);

foreach($ticketQuantity as $key => $value)
{
    echo "<div class = 'ticketPrint'> Print this $value </div>";

}


?>
</div>



<br>
<div class = 'ticketPrint'>
    <img src="qr.png" alt="logo" width="100px" />
</div>

</body>
</html>