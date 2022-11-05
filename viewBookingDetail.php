<!-- This page is to view the full information on each booking -->
<?php
$title = 'View Booking';
require_once 'includes/header.php';
require_once 'includes/authenticationCheck.php';
require_once 'db/conn.php';

//get booking by id

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $crud->getBookingDetails($id);
} else {
    echo "<h1 'class = text-danger'> Please check details and try again </h1>";
}
?>


<div class="card viewcard" style="width: 18rem;">
    <h5 class="card-title"> <?php echo $result['firstName'] . ' ' . $result['lastName']; ?></h5>

    <p class="card-text">From: <?php echo $result['startDate']; ?></p>
    <p class="card-text">To: <?php echo $result['endDate']; ?></p>
    <p class="card-text">Email: <?php echo $result['email']; ?></p>
    <p class="card-text">Tel: <?php echo $result['telephone']; ?></p>
    <p class="card-text">Notes: <?php echo $result['notes']; ?></p>
    <a href="index.php" class="btn btn-primary home-button">Home</a>
</div>
</div>

<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>