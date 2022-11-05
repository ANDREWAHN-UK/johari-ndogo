<!-- This page serves as the action page for the Testimonial form -->

<?php
$title = 'Testimonial Success';
require_once 'includes/header.php';
require_once 'db/conn.php';

//the submit button is named testimonialButton
//checks the testimonialButton exists, which means it has been sent, i.e. clicked
if (isset($_POST['testimonialButton'])) {
    //if it does exist, map the form values to the function values
    $userName = $_POST['userName'];
    $lengthOfStay = $_POST['lengthOfStay'];
    $reviewText = $_POST['reviewText'];

    //if successful, call the function, which will add to the database
    $isSuccess = $crud->insertTestimonial($userName, $lengthOfStay, $reviewText);

    if ($isSuccess) {
        include 'includes/successMessage.php';;
    } else {
        include 'includes/errorMessage.php';;
    }
} else {
}
?>
<!-- Text here is placeholder -->


<div class="card" style="width: 18rem;">

    <div class="card-body">

        <h5 class="card-title"> <?php echo $_POST['userName']; ?></h5>
        <p class="card-text">Stayed for: <?php echo $_POST['lengthOfStay']; ?></p>
        <p class="card-text">Review: <?php echo $_POST['reviewText']; ?></p>

        <a href="index.php" class=" btn-primary home-button">Home</a>
    </div>

</div>

<?php

?>

<?php
require_once 'includes/footer.php';
?>