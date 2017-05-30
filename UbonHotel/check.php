<?php

  $user = isset($_GET["username"]) ? $_GET["username"] : "";
  $pass = isset($_GET["password"]) ? $_GET["password"] : "";
  $data =array();
  $data2 = array();
  $room = "";
  $message = "ไม่มีชื่อผู้ใช้นี้";
  $message2 = "ยินดีต้อนรับ ";
  $message3 = "รหัสผ่านไม่ถูกต้อง";
  // echo "<script type='text/javascript'>alert('$message.$user.$message');</script>";

  // Create connection
  $conn = new mysqli("localhost", "root", "", "members");
  // Check connection
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users " ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data[$row["name"]] = $row["password"];
            $data2[$row["name"]] = $row["roomnumber"];
          }

    } else {
        // echo "0 results";
    }

    $conn->close();

    $room = $data2["adam"];
    echo "string:".$room;

    foreach ($data as $key => $value) {
       echo "<script type='text/javascript'>alert('$key.$message.$value');</script>";
    }

    if(array_key_exists($user, $data)){
        $n=0;
        foreach ($data as $key => $value) {
          if($pass == $value){
            $n = 1;
          }
        }

        if($n==1){

          if($user=="admin"){
            echo "<script type='text/javascript'>alert('$message2.$user');</script>";
            header('Location: manage.php');
          }else{
            echo "<script type='text/javascript'>alert('$message2.$user');</script>";
            header('Location: home.php?p='.$room);
          }


        }else{
            echo "<script type='text/javascript'>alert('$message3');</script>";
            header('Location: index.php');
        }
    }else{
         echo "<script type='text/javascript'>alert('$message');</script>";
         header('Location: index.php');
    }

 ?>
