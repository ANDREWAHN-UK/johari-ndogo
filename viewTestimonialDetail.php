<!-- This page is to view the full information on each contact -->
<?php
$title = 'View Contact';
require_once 'includes/header.php';
require_once 'includes/authenticationCheck.php';
require_once 'db/conn.php';

//get testimonial by id

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $crud->getTestimonialDetail($id);
} else {
    echo "<h1 'class = text-danger'> Please check details and try again </h1>";
}
?>

<div class="card viewcard" style="width: 18rem;">
    <h5 class="card-title"> From:<?php echo $result['userName']; ?> </h5>
    <p class="card-text">Subject: <?php echo $result['lengthOfStay']; ?></p>
    <p class="card-text">Message: <?php echo $result['reviewText']; ?></p>
    <a href="index.php" class="btn btn-primary home-button">Home</a>
</div>

</div>

<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>