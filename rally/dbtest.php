<html>
<head><basefont face="Arial"></head>
<body>
<h1>Test connection to MySQL Database<h1>
<?php
// Define variables
// $servername = "192.168.0.120";
$servername = "localhost";
$username = "dave";
$password = "41Q~vjNto$xS";
$mydb = "rudhamla_rally";

// echo "Variables defined";

// Create connection
$conn = new mysqli($servername, $username, $password, $mydb);
// $conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Show tables
/* $sql = "SHOW DATABASES";
$result = $conn->query($sql);
// echo "Keys: " . var_dump($result) . "<br>";
echo gettype($result);

if ($result->num_rows > 0) {
  // output data of each row
  $row = 0;
  while($row <= $result->num_rows) {
    echo "Database: " . $result[$row]. "<br>";
	$row++;
  }
} else {
  echo "0 Databases";
} */

// Create database
/* $sql = "SELECT * FROM test";
$result = $conn->query($sql);
var_dump($result);
echo "<br>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row . "<br>";
  }
} else {
  echo "0 results";
} */

echo "Connected successfully";

$conn -> close();

?>

</body>
</html>