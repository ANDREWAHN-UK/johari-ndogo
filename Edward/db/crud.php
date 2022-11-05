<!-- This file is to store all the functions required to create, read, update and delete things -->

<?php

class crud
{   //private database object
    private $db;

    //the constructor initialises a private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;  //this tells the code that wherever we refernce db, we want the db from the conn file
    }


    //===================================Booking Form functions ===================================

    //function to insert a booking request to the table
    public function insertBooking($firstName, $lastName, $startDate, $endDate, $email, $telephone, $notes)
    {
        try {

            //define the sql statement using placeholder values
            $sql = "INSERT INTO booking (firstName, lastName, startDate, endDate, email, telephone, notes) 
            VALUES(:firstName, :lastName, :startDate, :endDate, :email, :telephone, :notes)";

            //prepare the sql statement
            $stmt = $this->db->prepare($sql);

            //bind the placeholder values to the actual values
            $stmt->bindparam(':firstName', $firstName);
            $stmt->bindparam(':lastName', $lastName);
            $stmt->bindparam(':startDate', $startDate);
            $stmt->bindparam(':endDate', $endDate);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':telephone', $telephone);
            $stmt->bindparam(':notes', $notes);

            // execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //this function to retrieve information from the database--> this is seen on viewRecords as a summary
    public function getBookingData()
    {
        $sql = "SELECT * FROM `booking`";
        $result = $this->db->query($sql);
        return $result;
    }

    //this function to get more details from the database entry
    public function getBookingDetails($id)
    {
        try {
            $sql = "SELECT * FROM `booking` where bookingId=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //this function to edit a booking
    //for some reason, this is just not working :(
    public function editBooking($bookingId, $firstName, $lastName, $startDate, $endDate, $email, $telephone, $notes)
    {
        try {
            //define the sql statement using placeholder values
            $sql = "UPDATE `booking` SET 
        `firstName`=:firstName,
        `lastName`=:lastName,
        `startDate`=:startDate,
        `endDate`=:endDate,
        `email`=:email,
        `telephone`=:telephone,
        `notes`=:notes
         WHERE bookingId = :id ";

            //prepare the sql statement
            $stmt = $this->db->prepare($sql);

            //bind the placeholder values to the actual values
            $stmt->bindparam(':id', $bookingId);
            $stmt->bindparam(':firstName', $firstName);
            $stmt->bindparam(':lastName', $lastName);
            $stmt->bindparam(':startDate', $startDate);
            $stmt->bindparam(':endDate', $endDate);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':telephone', $telephone);
            $stmt->bindparam(':notes', $notes);

            // execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //function to delete a booking

    public function deleteBooking($id)
    {
        try {
            $sql  = "delete from booking where bookingId = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    // ====================================Contact Form Functions ====================================

    //function to post contacts to the database

    public function insertContact($name, $email, $subject, $message)
    {
        try {
            //define the sql statement using placeholder values
            $sql = "INSERT INTO contact (name, email, subject, message ) VALUES(:name, :email, :subject, :message)";

            //prepare the sql statement
            $stmt = $this->db->prepare($sql);

            //bind the placeholder values to the actual values
            $stmt->bindparam(':name', $name);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':subject', $subject);
            $stmt->bindparam(':message', $message);

            // execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //function to retrieve contact information from the database
    public function getContactData()
    {
        try {
            $sql = "SELECT * FROM `contact`";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //this function to get more details from the database entry
    public function getContactDetails($id)
    {
        try {
            $sql = "SELECT * FROM `contact` where contactId=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    //function to delete contact information from the database
    //NB we are skipping edit, as we can't get it to actually work :(

    public function deleteContact($id)
    {

        try {
            $sql  = "delete from contact where contactId=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    //====================================Testimonial Functions ====================================

    //function to post testimonials to the database

    public function insertTestimonial($userName, $lengthOfStay, $reviewText)
    {
        try {

            //define the sql statement using placeholder values
            $sql = "INSERT INTO testimonials (userName, lengthOfStay, reviewText) VALUES(:userName, :lengthOfStay, :reviewText)";

            //prepare the sql statement
            $stmt = $this->db->prepare($sql);

            //bind the placeholder values to the actual values
            $stmt->bindparam(':userName', $userName);
            $stmt->bindparam(':lengthOfStay', $lengthOfStay);
            $stmt->bindparam(':reviewText', $reviewText);

            // execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //this function to retrieve testimonials from the database-->  and show them where needed
    public function getTestimonialData()
    {
        try {
            $sql = "SELECT * FROM `testimonials`";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //this function to get more details from the database entry
    public function getTestimonialDetail($id)
    {
        try {
            $sql = "SELECT * FROM `testimonials` where id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //function to delete testimonials from the database
    //NB we are skipping edit, as we can't get it to actually work :(

    public function deleteTestimonial($id)
    {

        try {
            $sql  = "delete from testimonials where id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}

?>