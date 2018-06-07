<?php 

$servername = "localhost";
$username = "root";
$password = "Namita&811";
$dbname = "ks";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM expert";

$result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $name1= $row["eid"];
          echo $name1;
      }
  }

$name = $_POST['name'];

echo "In php";

echo $name;




 ?>