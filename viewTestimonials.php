<!-- This site shows all entries in the Testimonials Database -->
<?php
$title = 'Testimonials';
require_once 'includes/header.php';
require_once 'includes/authenticationCheck.php';
require_once 'db/conn.php';
$testimonialResult = $crud->getTestimonialData();
?>

<br>
<br>

<table class="table bookingTable">
    <thead>
        <tr>
            <th scope="col">Testimonials:</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Length of Stay</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($r = $testimonialResult->fetch(PDO::FETCH_ASSOC)) { //open in one php block   
        ?>
            <tr>
                <th scope="row"><?php echo $r['id'] ?></th>

                <!-- therefore everything here is html, not php. So our data gets displayed as html -->
                <!--But inside each td, we shall need another PHP block!-->

                <td> <?php echo $r['userName'] ?></td>
                <td> <?php echo $r['lengthOfStay'] ?></td>

                <td>
                    <a href="viewTestimonialDetail.php?id=<?php echo $r['id'] ?>" class="btn btn-crud btn-primary">View</a>
                    <a onclick="return confirm('Are you sure you wish to delete this record?');" href="testimonialDelete.php?id=<?php echo $r['id'] ?>" class="btn btn-crud btn-danger">Delete</a>
                </td>
            <?php  } //close in another php block
            ?>
            </tr>
    </tbody>
</table>

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