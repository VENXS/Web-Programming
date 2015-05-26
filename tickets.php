<?php
require("includes/head.php");
require("includes/nav.php");

session_start();


echo "<p> You're ticket:" . $_SESSION['film'] . ". </p>";
echo "<p> You're ticket day:" . $_SESSION['day'] . ". </p>";
echo "<p> You're ticket time:" . $_SESSION['time'] . ". </p>";
echo "<p> You're adult ticket:" . $_SESSION['SA'] . ". </p>";



// for each () {
// create
// <div id = "ticket"> </div>
// }
?>




<div id = buttons>
<div class = button1>
<form action="reset.php">
    <input type="submit" value="Click here to finish">
</form>
</div>
<div class = button2>
<form action="print.php">
    <input type="submit" value="Print">
</form>
</div>
</div>

<br>

<?php
require("includes/footer.php");
?>

