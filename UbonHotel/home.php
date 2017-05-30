<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UBON HETEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  body, html {
      height: 100%;
      line-height: 1.8;
  }
  /* Full height image header */

  .w3-bar .w3-button {
      padding: 16px;
  }
  .divlog{
    padding-top: 50px;
    padding-right: 500px;*/
    padding-bottom: 200px;
    padding-left: 500px;*/
    background-color: red;
  }
  .button {
      background-color: #848484;
      border: none;
      color: white;
      padding: 5px 50px;
      font-size: 16px;
  }
  .button2 {
      background-color: #848484;
      border: none;
      color: white;
      padding: 5px 40px;
      font-size: 16px;

  }
  .input{
    width: 40%;
    padding: 12px 20px;
    margin: 4px 0;
    border:#04B486;
  }
  .register{
    font-size: 20px;
  }

  </style>
  <body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card-2" id="myNavbar">
      <a href="index.php" class="w3-bar-item w3-button w3-wide">UBON HOTEL</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGOUT</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  <br><br>
  <div class="w3-container" style="padding:128px 16px" align="middle">

    <?php

    $room = isset($_GET["p"]) ? $_GET["p"] : "";
    // $user = isset($_GET["p2"]) ? $_GET["p2"] : "";
    $data  = array();
    $conn = new mysqli("localhost", "root", "", "members");
    // Check connection
    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM rent " ;
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          // while($row = $result->fetch_assoc()) {
          //     $data[$row["username"]] = $row["price"];
          //   }

          $row = $result->fetch_assoc();

          while($row = $result->fetch_assoc()) {
              $data[$row["roomnumber"]] = $row["price"];
            }

      } else {
          echo "0 results";
      }

      $conn->close();

      $price = $data[$room];

      // echo "<h1>".$user."<h1>";

      echo "<style>
	    th,td{
	      padding:15px;
	    }
	    table,td,th{
	      border:1px solid #ddd;
	      text-align:center;
	    }
	    table{
	      border-collapse:collapse;
	    }
    </style>";
  	echo "<table>";
  		echo "<tr>
  		    <th>หมายเลขห้อง</th>
  		    <th>ค่าเช่า</th>
  		  </tr>";
  	    // foreach ($data as $key => $value) {
  			echo "<tr>";
  			    echo"<td>".$room."</td>";
  			    echo"<td>".$price."</td>";
  			echo "</tr>";
  		// }

  	echo "</table>";

     ?>
   </div>

  </body>
</html>
