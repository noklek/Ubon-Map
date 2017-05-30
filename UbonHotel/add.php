<?php

  $data1 = isset($_POST["d"]) ? $_POST["d"] : "";
  $data2 = isset($_POST["d2"]) ? $_POST["d2"] : "";

  // Create connection
  $conn = new mysqli("localhost", "root", "", "members");
  // Check connection
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
  }

  if(data1[0] != ""){
    $sql = "INSERT INTO rent (roomnumber, price)
    VALUES ('$data1[0]', '$data1[1]')";
  }if(data2[0] != ""){
    $sql = "INSERT INTO users (name, password,roomnumber)
    VALUES ('$data2[0]', '$data2[1]','$data2[2]')";
  }


  if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";
      header('Location: manage.php');
  } else {
      header('Location: manage.php');
      // echo "Error: " . $sql . "<br>" . $conn->error;
  }

    $conn->close();


 ?>
