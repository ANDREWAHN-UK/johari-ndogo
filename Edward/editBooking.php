<!-- This page is used to edit bookings, and is accessed by clicking the edit button, in viewBookings.php -->

<?php
$title = 'Edit Booking Form';
require_once 'includes/header.php';
require_once 'includes/authenticationCheck.php';
require_once 'db/conn.php';

if(!isset($_GET['id'])){
    include 'includes/errorMessage.php';
    header("Location: index.php");
} else {
    $id = $_GET['id'];
    $booking = $crud->getBookingDetails($id);

    //note that the closing } of this if statement is at the end of the code block
    //in other words, all of the display is inside the if statement
?>
<div class="container">

    <section class="booking-form" id="booking-form">
        <div class="row justify-content-center align-items-center g-2">

            <div class="col">
                    <!-- Need a different action page for editing -->
                <form method="post" action="editBookingSuccess.php">
                    <input required type="hidden" value="<?php $booking["bookingId"]?>" name="id">

                    <h2 class="booking-form-title">Edit Booking Form</h2>
                    <div class="row">
                        <div class="col-25">
                            <label for="firstName">First Name</label>
                        </div>
                        <div class="col-75">
                            <!-- The value="" in the next line retrieves the row value -->
                            <input required type="text" value="<?php echo $booking['firstName'] ?>" id="firstName" name="firstName" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lastName">Last Name</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" value="<?php echo $booking['lastName'] ?>" id="lastName" name="lastName" placeholder="Your last name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" value="<?php echo $booking['email'] ?>" id="email" name="email" placeholder="Your email...">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="telephone">Telephone</label>
                        </div>
                        <div class="col-75">
                            <input required type="text"  value="<?php echo $booking['telephone'] ?>" id="telephone" name="telephone" placeholder="Your contact number...">
                            <div id="contactNumberHelp" class="form-text">We'll never share your number with anyone else.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="startDate">Start Date</label>
                        </div>
                        <div class="col-75">
                            <input required type="date" value="<?php echo $booking['startDate'] ?>" id="startDate" name="startDate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="endDate">End Date</label>
                        </div>
                        <div class="col-75">
                            <input required type="date" value="<?php echo $booking['endDate'] ?>" id="endDate" name="endDate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="notes">Notes</label>
                        </div>
                        <div class="col-75 form-field">
                            <input required type="text" value="<?php echo $booking['notes'] ?>" id="notes" name="notes" placeholder="Write something.." style="height:200px" rows="5">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                        
                            <button type="submit" class=" btn-primary" name="editButton" id="editButton">Save changes!</button>


                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php } ?>
<?php
require_once 'includes/footer.php';
?>