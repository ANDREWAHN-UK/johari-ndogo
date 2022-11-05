
<!-- This checks if the user is logged in. If not, redirects the user. Use this on pages that are to be restricted -->
<?php 
if(!isset($_SESSION['userId'])){
    header("Location: login.php");
}
