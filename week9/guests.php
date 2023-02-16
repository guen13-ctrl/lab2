<!DOCTYPE html>
<html>
<body>

<div class="sidenav">
  <a href="index.php">Go Back to My Profile</a>
</div>

<div class="content">
  <h2>Guen's Guest</h2>
  <p>people who signed up on my website's form.</p>
  <p>
  <?php
          $servername = "192.168.150.213";
          $username = "webprogmi211";
          $password = "j@zzyAngle30";
          $dbname = "webprogmi211";
          
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT name, email, website, comment, gender FROM gbalimodian_MyGuests";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<br> Name: " . $row["name"]. " - Email: " . $row["email"]. " - Website: " . $row["website"].
              " - Comment: " . $row["comment"]. " - Gender: " . $row["gender"]. "<br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();  
  ?>
</p>
</div>


</body>
</html>