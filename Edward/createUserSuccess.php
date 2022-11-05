<!-- This page serves as the action page for creating users -->

<?php
$title = 'Create User Success';
require_once 'includes/header.php';
require_once 'db/conn.php';

//the submit button is named registerButton
//checks the testimonialButton exists, which means it has been sent, i.e. clicked
if (isset($_POST['registerButton'])) {
    //if it does exist, map the form values to the function values
    $username = $_POST['username'];
    $password = $_POST['password'];


    //if successful, call the function, which will add to the database
    $isSuccess = $user->insertUser($username, $password);

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

        <p> You have successfully created the user:</p>
        <h5 class="card-title"> <?php echo $_POST['username']; ?></h5>
        <a href="index.php" class=" btn-primary home-button">Home</a>
        
    </div>

</div>

<?php

?>

<?php
require_once 'includes/footer.php';
?>