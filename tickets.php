<?php
require("includes/head.php");
require("includes/nav.php");

session_start();
?>

<h1> Ticket Information</h1>

<div id = "ticket">
<img src="logo.png" alt="logo" width="200px" />
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
?>
</div>




<div id=buttons>
    <div class=button1>
        <form action="reset.php">
            <input type="submit" value="Click here to finish">
        </form>
    </div>
    <div class=button2>
        <form action="print.php">
            <input type="submit" value="Print">
        </form>
    </div>
</div>

<br>

<?php

// for each () {
// create
// <div id = "ticket"> </div>
// }


require("includes/footer.php");
?>

