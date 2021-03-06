<?php

//database configuration

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "groceries";

 //create database connection

 $db = new mysqli($dbhost, $dbuser, $dbpass,$db);

 if($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);
 
 

 }
 
// function CloseCon($conn)
//  {
//  $conn -> close();
//  }
   
