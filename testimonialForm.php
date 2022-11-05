<?php
$title = 'Booking Form';
require_once 'includes/header.php';
?>
<div class="container">

    <section class="booking-form" id="booking-form">
        <div class="row justify-content-center align-items-center g-2">

            <div class="col">

                <form method="post" action="testimonialSuccess.php">

                    <h2 class="booking-form-title">Leave a Review</h2>
                    <div class="row">
                        <div class="col-25">
                            <label for="firstName">Name</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="userName" name="userName" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lengthOfStay">Length of stay</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="lengthOfStay" name="lengthOfStay" placeholder="How long did you stay for?..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="notes">Your thoughts?</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="reviewText" name="reviewText" placeholder="Write something.." style="height:200px" rows="5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                            <button type="submit" class=" btn-primary" name="testimonialButton" id="registerButton">Submit Review!</button>
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