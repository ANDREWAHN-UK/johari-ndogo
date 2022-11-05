<?php
$title = 'New user Form';
require_once 'includes/header.php';
require_once 'includes/authenticationCheck.php';
?>
<div class="container">

    <section class="newUserForm" id="newUserForm">
        <div class="row justify-content-center align-items-center g-2">

            <div class="col">

                <form method="post" action="createUserSuccess.php">

                    <h2 class="booking-form-title">Register a new user</h2>
                    <div class="row">
                        <div class="col-25">
                            <label for="username">First Name</label>
                        </div>
                        <div class="col-75">
                            <input required type="text" id="username" name="username" placeholder="user name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lastName">Last Name</label>
                        </div>
                        <div class="col-75">
                            <input required type="password" id="password" name="password" placeholder="Your last name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                            <button type="submit" class=" btn-primary" name="registerButton" id="registerButton">Create User!</button>
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