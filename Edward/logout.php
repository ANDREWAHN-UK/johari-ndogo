<?php 
//this includes the current session, which is the one that will be destroyed

include_once 'includes/session.php';

?>

<?php 
//this now destroys the session, and redirects the user
session_destroy();
header("Location: index.php");
?>