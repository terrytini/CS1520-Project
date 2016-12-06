<?php
    $connection = mysql_connect('localhost', 'root', '');

    if(!($connection)) {
      die("Connection failed. ");
    }else{
      //successfully made connection to server, continue on
    }

    //check if database exists and make a new one if not
    if(!(mysql_select_db('mywebsite', $connection))){
      //trying to create new database
      $sql = "CREATE DATABASE mywebsite";
      if (mysql_query($sql, $connection)) {
          //successfully created new db
      } else {
          die("Error creating database.");
      }

    }
    else{
      //db exists
    }

    $sql = "CREATE TABLE FormStuff (
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    comments TEXT NOT NULL
    )";

    if(mysql_query($sql, $connection)){
      //Table did not exist, made a new one
    }else{
      //table already exists
    }

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $email = $_GET["email"];
    $comments = $_GET["questiontext"];

    $sql2 = "INSERT INTO FormStuff (firstname, lastname, email, comments) VALUES ('$firstname', '$lastname', '$email', '$comments')";

    if(mysql_query($sql2, $connection)){
      //successfully submitted data
    }else{
      die("Error submitting form data :(");
    }

    mysql_close();  //close connections
 ?>
