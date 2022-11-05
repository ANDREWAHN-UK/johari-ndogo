<?php
$title = 'Index';
require_once 'includes/header.php';
//require_once 'db/conn.php';

$testimonialResult = $crud->getTestimonialData();
?>

<section class="intro" id="home">
    <h1 class="section--title section--title--intro">
        Welcome to<strong> Johari Ndogo</strong>
    </h1>
    <p class="section--subtitle section--subtitle--intro">
        Swahili for "little jewel"
    </p>
    <img src="assets\media\johari-photo (22).jpg" class="portrait1" alt="A picture of giraffes">
</section>

<!-- About Maanzoni -->
<section class="about--maanzoni" id="about--maanzoni">

    <h2 class="section--title section--title--about">
        Maanzoni
    </h2>
    <p class="section--subtitle section--subtitle--about"> Wildlife a stone's throw away

    </p>

    <div class="about--me--body text-box-one">

        <p>Begin your next adventure by entering Johari Ndogo, our picturesque 4-bedroom guest house in the
            rolling landscape of Maanzoni Wildlife Estate, where you'll be greeted with incredible views through large windows.</p>

        <br>
        <p>Our thoughtfully designed guest house is the quintessential outdoor retreat, central to many of the adventures
            found in Maanzoni Wildlife Estate's expansive landscape. Ideal for family fun, couples, friends,
            nature walks and biking in the conservation area, and other activities for up to 8 guests!</p>

        <br>

        <p>Johari Ndogo is located on 5 acres of the beautiful Johari House hillside and is
            privately fenced on half an acre with its own private gate (perfect for dog lovers).
            You'll have plenty of room to spread out and enjoy the fresh estate air in privacy.
            Prepare to enjoy the natural outdoors with plenty of wildlife as you go on nature walks,
            drives, bike rides, or runs throughout the estate.
        </p>

        <a href="bookingForm.php" class="btn-booking btn-primary">Book now!</a>
    </div>
    <!--  image of the area-->

    <img src="assets\media\johari-photo (24).jpg" alt="picture of giraffes" class="about-me-image">

</section>
<section class="about--cottage" id="about--cottage">

    <h2 class="section--title section--title--about">
        The Cottage
    </h2>
    <p class="section--subtitle section--subtitle--about"> A fully equipped kitchen and lovely spacious bedrooms.

    </p>

    <div class="about--me--body text-box-two">

        <p>
            Enjoy your meals together at the dining room table,
            or take them to the large verandah with a lounge and a bar area for an epic barbecue and drinks.</p>

        <p>After a hike or game drive through Maanzoni Wildlife Estate, retire to the family room for a movie night.
            This inviting space features a flatscreen TV with streaming access and live TV via YouTube TV and Wi-Fi.</p>

        <p>Maanzoni Estate is a place where residents want to coexist with wildlife and nature,
            and we capture that in our decor by using classic rustic details from dead acacia
            for the wood décor and river stones sourced from the area to complement the environment
            and capture the panoramic views from each window.</p>

        <p>The bedrooms are all en-suite and the include a master bedroom has its own private living room and verandah.
            There is a double sleeper sofa in the master living room, which is ideal for a family with small children
            and can be accessed through the master for added privacy and security.</p>

        <a href="bookingForm.php" class="btn-booking  btn-primary">Book now!</a>
    </div>
    <!--  image of the cottage-->

    <img src="assets\media\johari-photo (8).jpg" alt="picture of giraffes" class="about-me-image">

</section>

<!-- Photos. To DO: when clicked, bring up a larger version of the photo -->


<section id="testimonials">
    <!--Testimonial Page -->
    <div class="slider">
    <!-- The information to populate this needs to be copied from 
    viewTestimonials.php, which is not visible to the public. 
    This is to allow some control over what the user sees when they are on this page, i.e. index.php -->
        <div>
            <p class="section--subtitle section--subtitle--testimonials"> A Selection of testimonials

            </p>
            <div class="testimonial-container">

                <div class="testimonial-box">
                    <div class="testimonial">


                        <i class="fas fa-quote-right"></i>

                        <span class="testimonial-text">Many merry men made much money making marzipan mice	</span>
                        <div class="testimonial-guest">
                            <img src="./assets/media/dice.jpg" alt="guest-img" class="guest-img">
                            <div class="guest-info">
                                <span class="guest-name"> Andy</span>
                                <div class="guest-details">
                                    <span class="guest-start-date">Stayed for 2 days</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div>
            <p class="section--subtitle section--subtitle--testimonials"> A Selection of testimonials

            </p>
            <div class="testimonial-container">
                <div class="testimonial-box">
                    <div class="testimonial">
                        <i class="fas fa-quote-right"></i>
                        <span class="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dignissimos blanditiis similique quod quaerat et recusandae tempora. Animi error quaerat labore cum! Ratione veritatis culpa illo quo molestiae minima repudiandae.</span>
                        <div class="testimonial-guest">
                            <img src="./assets/media/fast-car.png" alt="guest-img" class="guest-img">
                            <div class="guest-info">
                                <span class="guest-name">Nadia</span>
                                <div class="guest-details">
                                    <span class="guest-start-date">Stayed for 1 week</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    </div>

    <!--Testimonial Form This is a separate page-->

</section>

<section class="contact-section" id="contact-section">
    <div class="container contact-container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Contact Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-7 d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Get in touch</h3>
                               
                                <form method="POST" action="contactSuccess.php" name="contactForm" id="contactForm" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input required type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input required type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input required type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea required name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input  type="submit" value="Send Message" class="btn  btn-contact"  name="contactButton" id="contactButton">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap  w-100 p-lg-5 p-4">
                                <h3 class="mb-4 mt-md-4">Contact us</h3>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> PO Box 1234 Maanzoni</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+ 254 000000</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a href="mailto:ahnclan@gmail.com">ahnclan@gmail.com</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Website</span> <a href="https://johari-ndogo.herokuapp.com/">Johari</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-work" id="work">
    <h2 class="section--title section--title--work">Our Views</h2>
    <p class="section--subtitle section--subtitle--work"> A selection of our photos</p>

    <div class="portfolio">

        <!-- see if can make it so each photo linked opens up the full size photo -->

        <a href="portfolio-item-milestone-four.html" class="portfolio--item">
            <img src="assets/media/JoNd (1).jpeg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (10).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (11).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (12).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (13).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (14).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (15).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (16).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (17).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (18).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (19).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (2).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (20).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (21).jpg" alt="" class="portfolio--image">
        </a>

        <a href="#" class="portfolio--item">
            <img src="assets/media/JoNd (22).jpg" alt="" class="portfolio--image">
        </a>
    </div>
    <a href="bookingForm.php" class="btn-booking  btn-primary">Book now!</a>
</section>



<?php
require_once 'includes/footer.php';
?>