<?php
$title = 'Log in page';
require_once 'includes/header.php';
require_once 'db/conn.php';  


//if the data is submitted via a form post request ...
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //then take some actions
    $username = strtolower(trim($_POST['username'])); //get user name entered by user
    $password = $_POST['password']; //get password entered by user
    $new_password = md5($password.$username); //hash the password

    $result = $user->getUser($username, $new_password); //verify these exist in the database

    if(!$result){
        echo '<div class="alert alert-danger">
        User name or password is incorrect. Please try again.
        </div>';
    } else {
        $_SESSION['username'] = $username; //start a session with this user
        $_SESSION['userId'] = $result['id']; //start a session with this id
        header("Location: viewRecords.php");//send the user here
    }

}
?>
<br>
<br>
<br>
<h1 class="text-center">
    <?php echo $title ?>

  
</h1>

<br>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">

    <table class="table table-sm">
        <tr>
            <td>
                <label for="username">Username: *</label>
            </td>
            <td>
                <input type="text" name="username" class="form-control" id="username" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username'];  ?>">
                <?php if(empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>$username_error</p>"; ?>
            </td>
        </tr>
        <tr>
            <td><label for="password">Pasword *</label></td>
            <td><input type="password" name="password" class="form-control" id="password">
                <?php if(empty($password) && isset($password_error)) echo "<p class='text-danger'>$password_error</p>" ?>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <input type="submit" value="Log in" class="btn btn-primary btn-block">
    <br>
    <a href="">Forgot Password?</a>

</form>

<?php
require_once 'includes/footer.php';
?>