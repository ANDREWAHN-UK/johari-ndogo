<?php
$title = 'Delete Testimonial';

require_once 'includes/authenticationCheck.php';

require_once 'db/conn.php';


if(!$_GET['id']){
    include 'includes/errorMessage.php';
    header("Location: index.php");;;
} else {

    //get id values
    $id = $_GET['id'];

    //call delete function
$result = $crud->deleteTestimonial($id);
    // redirect to appropriate page
    if($result){
        header("Location: viewTestimonials.php");
    } else {
        include 'includes/errorMessage.php';;
    }
}
?>