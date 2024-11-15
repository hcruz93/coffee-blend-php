<?php

  try {
    // host
    define("HOST","localhost");

    // db name
    define("DBNAME", "coffee-blend");

    // user
    define("USER","root");

    // pass
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }
  catch( PDOException $Exception ) {
    // if ($conn == true) {
    //   echo "fine";
    // } else {
    //   echo "error";
    // }

    echo $Exception->getMessage( ); 

  }
