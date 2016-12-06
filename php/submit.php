<?php
    $connection = mysql_connect('localhost', 'root', '');

    if(!($connection)) {
      die("Connection failed. ");
    }else{
      echo("Made a connection to server! ");
    }

    //check if database exists and make a new one if not
    if(!(mysql_select_db('mywebsite', $connection))){
      echo "Trying to create new database. ";
      $sql = "CREATE DATABASE mywebsite";
      if (mysql_query($sql, $connection)) {
          echo "Database created successfully. ";
      } else {
          echo "Error creating database. ";
      }

    }
    else{
      echo "Database exists!\n";
    }

    $sql = "CREATE TABLE FormStuff (
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    comments TEXT NOT NULL
    )";

    if(mysql_query($sql, $connection)){
      echo "Table did not exist, made a new one! ";
    }else{
      echo "Table exists! ";
    }

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $email = $_GET["email"];
    $comments = $_GET["questiontext"];

    $sql2 = "INSERT INTO FormStuff (firstname, lastname, email, comments) VALUES ('$firstname', '$lastname', '$email', '$comments')";

    if(mysql_query($sql2, $connection)){
      echo "Successfully submitted form data!";
    }else{
      echo "Error submitting form data :(";
    }

    mysql_close();
 ?>

<h1>Thank you for your submission <?= $firstname ?>!</h1>
