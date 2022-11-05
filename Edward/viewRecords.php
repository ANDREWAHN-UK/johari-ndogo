<!-- This site allows access to the Database -->

<?php
$title = 'Records';
require_once 'includes/header.php';
require_once 'includes/authenticationCheck.php';
require_once 'db/conn.php';


?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
            <br>

            <p>This page connects to information from the databases</p>

            <p>What information would you like to see?</p>
            <br>

            <a class="btn btn-info" href="viewBookings.php">Bookings</a>
            <a class="btn btn-dark" href="viewContacts.php">Contacts</a>
            <a class="btn btn-warning" href="viewTestimonials.php">Testimonials</a>
            <a class="btn btn-primary" href="createUser.php">New user</a>
        </div>

    </div>
</div>


<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<?php require_once 'includes/footer.php'; ?>