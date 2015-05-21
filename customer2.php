<?php
// Start your session
session_start();

// check to see if the form has been submitted
if(isset($_POST) && !empty($_POST)){

    // Echo out the array, this will help with testing
    var_dump($_POST);

    // 1. How would you access something that has been submitted? eg from name="firstname", via post
    // NOTE: if there is no first name set, then there will be a PHP error
    $firstname = $_POST['firstname'];
    echo "<p>First name is: " . $firstname . "</p>";

    // 2. How would you check to see if something has been submitted? eg from name="lastname" ?
    // NOTE: if no last name is declared, then you try calling it later, there will be an error
    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
        echo "<p>Last name is: " . $lastname . "</p>";
    }

    // 3. How would you check to see if something isn’t empty or is a valid email address? eg from name="email" ?
    // NOTE: I would recommend declaring the variable outside of the if statement and setting it to be empty
    $email = "";
    if ( !empty($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
        $email = $_POST['email'];
        echo "<p>Email address is: " . $email . "</p>";
    }

    // 4. How would you check to see if something is numeric? eg from name="age" ?
    // NOTE: Same with age
    $age = "";
    if ( is_numeric($_POST[ 'age' ]) ) {
        $age = $_POST[ 'age' ];
        echo '<p>Age : ' . $age . '</p>';
    }

    // 5. The more generalised checks should happen first. What is the best order to complete these checks?
    if (isset($_POST['age']) && !empty($_POST['age']) && is_numeric($_POST['age']) ){
        $age = $_POST['age'];
        echo '<p>Age (all three checks): ' . $age . '</p>';
    }

    // !!!!!!!!!!!!!!!!
    // EXTRA STUFF
    // !!!!!!!!!!!!!!!!

    // Save the post array straight to the session array, named 'post'
    $_SESSION['post'] = $_POST;

    // Save first name to the session
    if (isset($_POST['firstname'])  && !empty($_POST['firstname'])) {
        $_SESSION['myForm']['firstname'] = $_POST['firstname'];
    }

    // Save last name to the session
    if (isset($_POST['lastname'])  && !empty($_POST['lastname'])) {
        $_SESSION['myForm']['lastname'] = $_POST['lastname'];
    }

    // And then save email
    if ( !empty($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
        $_SESSION['myForm']['email'] = $_POST['email'];
    }

    // Now age
    if (isset($_POST['age']) && !empty($_POST['age']) && is_numeric($_POST['age']) ){
        $_SESSION['myForm']['age'] = $_POST['age'];
    }

    // Finally, now we have our session saved, we can call out this information
    // just first check that the session exist, else if we didn't PHP could give us a nasty error
    if(isset($_SESSION['myForm'])){
        echo "<h2>My session information is:</h2>";
        echo "<p>First name is: " . $_SESSION['myForm']['firstname'] . "</p>";
        echo "<p>Last name is: " . $_SESSION['myForm']['lastname'] . "</p>";
        echo "<p>Email name is: " . $_SESSION['myForm']['email'] . "</p>";
        echo "<p>Age name is: " . $_SESSION['myForm']['age'] . "</p>";

        // Now print out the array just to help us
        var_dump($_SESSION['myForm']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Week 09: Quiz 3</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" />
    </div>

    <div>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" />
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" />
    </div>

    <div>
        <label for="age">Age</label>
        <input type="number" name="age" />
    </div>

    <div>
        <input type="submit" value="Submit Form" />
    </div>
</form>