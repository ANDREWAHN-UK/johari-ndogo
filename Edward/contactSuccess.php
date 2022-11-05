<!-- This page serves as the action page for the contact form -->

<?php
$title = 'Contact Success';
require_once 'includes/header.php';
require_once 'db/conn.php';

//the submit button is named contactButton
//checks the contactButton exists, which means it has been sent, i.e. clicked
if (isset($_POST['contactButton'])) {
    //if it does exist, map the form values to the function values
    $name = $_POST['name'];

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //if successful, call the function, which will add to the database
    $isSuccess = $crud->insertContact($name, $email, $subject, $message);

    if ($isSuccess) {
       include 'includes/successMessage.php';
    } else {
        include 'includes/errorMessage.php';;
    }
} else {
}
?>
<!-- Text here is placeholder -->

<div class="card" style="width: 18rem;">

    <div class="card-body">
        <h5 class="card-title"> From:<?php echo $_POST['name']; ?> </h5>
        <p class="card-text">Subject: <?php echo $_POST['subject']; ?></p>

        <p class="card-text">Email: <?php echo $_POST['email']; ?></p>

        <p class="card-text">Message: <?php echo $_POST['message']; ?></p>
        <a href="index.php" class=" btn-primary home-button">Home</a>
    </div>

</div>

<?php

?>

<?php
require_once 'includes/footer.php';
?>