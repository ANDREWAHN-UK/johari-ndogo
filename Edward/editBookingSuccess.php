<!-- This page serves as the action page for the Edit booking form -->
<!-- This page will not be seen, so no need to prettify -->

<?php
$title = 'Edit Booking Success';
require_once 'db/conn.php';

//get values from post operation

//the submit button is named editButton
//checks the editButton exists, which means it has been sent, i.e. clicked

if (isset($_POST['editButton'])) {
    //     //if it does exist, map the form values to the function values
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $notes = $_POST['notes'];

    //call the edit function from crud

    $result = $crud->editBooking($bookingId, $firstName, $lastName, $startDate, $endDate, $email, $telephone, $notes);

    // redirect to an appropriate page

    if ($result) {
        header("Location: viewBookings.php");
    } else {
        include 'includes/errorMessage.php';
    }
} else {
    include 'includes/errorMessage.php';
}

?>

