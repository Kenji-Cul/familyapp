<?php 
//define class for the users

/**
 * Author : Teibo Gideon
 * Program : School Website
 * Date : December 20, 2021
 */

 #include constants
 include("config.php");

 class User{
     var $username;
     var $email;
     var $class;
     var $password;
     var $dbcon;

     function __construct(){
         //creating of the object
         $this->dbcon = new MySqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
         if($this->dbcon->connect_error){
            die("Connection failed: ". $this ->dbcon-> connect_error);
         }else{
             echo "connected successfully";
         }
     }

    }
?>
