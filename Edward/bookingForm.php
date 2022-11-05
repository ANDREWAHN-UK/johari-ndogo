<?php
$title = 'Booking Form';
require_once 'includes/header.php';
?>
<div class="container">

    <section class="booking-form" id="booking-form">
        <div class="row justify-content-center align-items-center g-2">

            <div class="col">

                <form method="post" action="bookingSuccess.php">

                    <h2 class="booking-form-title">Come stay with us</h2>
                    <div class="row">
                        <div class="col-25">
                            <label for="firstName">First Name</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="firstName" name="firstName" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lastName">Last Name</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="lastName" name="lastName" placeholder="Your last name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="email" name="email" placeholder="Your email...">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="telephone">Telephone</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="telephone" name="telephone" placeholder="Your contact number...">
                            <div id="contactNumberHelp" class="form-text">We'll never share your number with anyone else.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="startDate">Start Date</label>
                        </div>
                        <div class="col-75">
                            <input required type="date" id="startDate" name="startDate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="endDate">End Date</label>
                        </div>
                        <div class="col-75">
                            <input required type="date" id="endDate" name="endDate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="notes">Notes</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="notes" name="notes" placeholder="Write something.." style="height:200px" rows="5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                            <button type="submit" class=" btn-primary" name="registerButton" id="registerButton">Book now!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php
require_once 'includes/footer.php';
?>