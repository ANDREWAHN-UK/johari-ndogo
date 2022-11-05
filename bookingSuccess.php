<!-- This page serves as the action page for the booking form -->

<?php
$title = 'Booking Success';
require_once 'includes/header.php';
require_once 'db/conn.php';

ini_set('SMTP','myserver');
ini_set('smtp_port',25);

//the submit button is named registerButton
//checks the registerButton exists, which means it has been sent, i.e. clicked
if (isset($_POST['registerButton'])) {
    //if it does exist, map the form values to the function values
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $notes = $_POST['notes'];

    //if successful, call the function, which will add to the database
    $isSuccess = $crud->insertBooking($firstName, $lastName, $startDate, $endDate, $email, $telephone, $notes);

    if ($isSuccess) {
        include 'includes/successMessage.php';  

    } else {
        include 'includes/errorMessage.php';
    }
} else {
}




    
    
    
?>
<!-- Text here is placeholder -->


<div class="card" style="width: 18rem;">

    <div class="card-body">
        <h5 class="card-title"> <?php echo $_POST['firstName'] . ' ' . $_POST['lastName']; ?></h5>

        <p class="card-text">From: <?php echo $_POST['startDate']; ?></p>
        <p class="card-text">To: <?php echo $_POST['endDate']; ?></p>
        <p class="card-text">Email: <?php echo $_POST['email']; ?></p>
        <p class="card-text">Tel: <?php echo $_POST['telephone']; ?></p>
        <p class="card-text">Notes: <?php echo $_POST['notes']; ?></p>
        <a href="index.php" class=" btn-primary home-button">Home</a>
    </div>
    
</div>

<?php

?>

<?php
require_once 'includes/footer.php';
?>