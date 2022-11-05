<!-- This site shows all entries in the Testimonials Database -->

<?php
$title = 'Contacts';
require_once 'includes/header.php';
require_once 'includes/authenticationCheck.php';
require_once 'db/conn.php';

$testimonialResult = $crud->getContactData();

?>

<br>
<br>


<table class="table bookingTable">
    <thead>
        <tr>
            <th scope="col">Contacts:</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">subject</th>           
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($r = $testimonialResult->fetch(PDO::FETCH_ASSOC)) { //open in one php block   
        ?>
            <tr>
                <th scope="row"><?php echo $r['contactId'] ?></th>

                <!-- therefore everything here is html, not php. So our data gets displayed as html -->
                <!--But inside each td, we shall need another PHP block!-->

                <td> <?php echo $r['name'] ?></td>
                <td> <?php echo $r['email'] ?></td>
                <td> <?php echo $r['subject'] ?></td>
             
                <td>
                <a href="viewContactDetail.php?id=<?php echo $r['contactId'] ?>" class="btn btn-crud btn-primary">View</a>
                    <a onclick="return confirm('Are you sure you wish to delete this record?');" href="contactDelete.php?id=<?php echo $r['contactId'] ?>" class="btn btn-crud btn-danger">Delete</a>
                </td>
            <?php  } //close in another php block
            ?>
            </tr>
    </tbody>
</table>

<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<?php require_once 'includes/footer.php'; ?>