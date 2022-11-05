<!-- This site shows all entries in the Booking Request Database -->

<?php
$title = 'Bookings';
require_once 'includes/header.php';
require_once 'includes/authenticationCheck.php';
require_once 'db/conn.php';

$bookingResult = $crud->getBookingData();

?>

<br>
<br>

<!-- Each table has a view option. Clicking this will lead to a different page for each table to display the information in full -->
<!-- Only first and last name from each form to be displayed -->
<table class="table bookingTable">
    <thead>
        <tr>
            <th scope="col">Booking Requests:</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($r = $bookingResult->fetch(PDO::FETCH_ASSOC)) { //open in one php block   
        ?>
            <tr>
                <th scope="row"><?php echo $r['bookingId'] ?></th>

                <!-- therefore everything here is html, not php. So our data gets displayed as html -->
                <!--But inside each td, we shall need another PHP block!-->

                <td> <?php echo $r['firstName'] ?></td>
                <td> <?php echo $r['lastName'] ?></td>
                <td>
                    <a href="viewBookingDetail.php?id=<?php echo $r['bookingId'] ?>" class="btn btn-crud btn-primary">View</a>
                    <a href="editBooking.php?id=<?php echo $r['bookingId'] ?>" class="btn btn-crud btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you wish to delete this record?');" 
                    href="deleteBooking.php?id=<?php echo $r['bookingId'] ?>" class="btn btn-crud btn-danger">Delete</a>
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