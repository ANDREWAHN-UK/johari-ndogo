<?php

class user{
    //private database object
    private $db;

    //the constructor initialises a private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;  //this tells the code that wherever we reference db, we want the db from the conn file
    }

    // this function to register a user
    public function insertUser($username, $password){
        try {
            //checks if the user already exists
            $result = $this->getUserByUserName($username);
            if ($result['num'] > 0) {
                return false;
            } else {
                //encrypt the password
                $newPassword = md5($password.$username);
                //define the sql statement using placeholder values
                $sql = "INSERT INTO user (username, password) VALUES(:username, :password)";

                //prepare the sql statement
                $stmt = $this->db->prepare($sql);

                //bind the placeholder values to the actual values
                $stmt->bindparam(':username', $username);

                //password matches the encrypted password
                $stmt->bindparam(':password', $newPassword);

                // execute the statement
                $stmt->execute();
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //this function to check user credentials
    public function getUser($username, $password)
    {

        try {
            $sql = "SELECT * FROM `user` where username = :username AND password =:password";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->bindparam(':password', $password);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //this function to prevent entering 2 users with the same username. This gets called inside the insertUser function
    public function getUserByUserName($username)
    {
        try {
            $sql = "SELECT count(*) as num FROM `user` where username = :username ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);

            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
