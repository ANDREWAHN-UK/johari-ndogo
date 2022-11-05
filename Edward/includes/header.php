<?php

//The below is the session file. As it is in the header, it will be on every page.
include_once 'includes/session.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

    <link rel="stylesheet" href="assets/style.css">

    <title>Johari - <?php echo $title ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <!--logo--><a href="index.php" class="nav--link"> <img src="assets/media/lion-logo.jpg" class="logo-image" alt="Logo"></a>
            <?php
            if (!isset($_SESSION['userId'])) {   ?>
                <!--log in--><a href="login.php" class="nav--link"> Log In</a>

            <?php } else { ?>
                <span>Hello <?php echo $_SESSION['username'] ?> !</span>
                <!--log in--><a href="logout.php" class="nav--link"> Log Out</a>
            <?php } ?>

        </div>


        <button class="nav-toggle" aria-label="toggle-navigation">
            <span class="hamburger">
            </span>
        </button>

        <nav class="nav">
            <ul class="nav--list">
                <li class="nav--item"><a href="index.php" class="nav--link"> Home</a></li>
                <li class="nav--item"><a href="index.php#about--maanzoni" class="nav--link"> Maanzoni</a></li>
                <!--<li class="nav--item"><a href="index.php#about--cottage" class="nav--link"> The Cottage</a></li>
                <li class="nav--item"><a href="index.php#work" class="nav--link"> Our Photos</a></li> -->
                <li class="nav--item"><a href="index.php#testimonials" class="nav--link"> Testimonials</a></li>
                <li class="nav--item"><a href="bookingForm.php" class="nav--link"> Book Now</a></li>
                <li class="nav--item"><a href="index.php#contact-section" class="nav--link"> Contact Us</a></li>
                <!-- Make this last link accesible and visible by admin only             -->
                <?php
                if (isset($_SESSION['userId'])) {   ?>
                    <li class="nav--item"><a href="viewRecords.php" class="nav--link"> View Records</a></li>

                <?php } ?>


            </ul>
        </nav>

    </header>