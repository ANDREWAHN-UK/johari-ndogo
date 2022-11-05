<?php
$title = 'Delete Booking';

require_once 'db/conn.php';


if(!$_GET['id']){
    include 'includes/errorMessage.php';
    header("Location: index.php");;
} else {

    //get id values
    $id = $_GET['id'];

    //call delete function
$result = $crud->deleteBooking($id);
    // redirect to appropriate page
    if($result){
        header("Location: viewBookings.php");
    } else {
        include 'includes/errorMessage.php';;
    }
}
?>