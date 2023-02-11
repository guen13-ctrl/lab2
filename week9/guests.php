<!DOCTYPE html>
<html>
<body>


<div class="sidenav">
  <a href="index.php">Go Back to My Profile</a>
</div>

<?php
$servername = "localhost";
$username = "webprogmi211";
$password = "webprogmi211";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, comment FROM gbalimodian_MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<h1>Guests Log</h1>";
    // output data of each row
   while($row = $result->fetch_assoc()) {
               echo "<br> Name: " . $row["name"]. " - Email: " . $row["email"]. " - Website" . $row["website"].
               echo "<br> Name: " . $row["name"]. " - Email: " . $row["email"]. " - Website: " . $row["website"].
               " - Comment: " . $row["comment"]. " - Gender: " . $row["gender"]. "<br>";
             }} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>