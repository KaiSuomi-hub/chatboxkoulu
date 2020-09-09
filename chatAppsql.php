<!-- chatAppsql.php -->
<?php
echo "fuck";
// kirjoita
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "koe";
$nimi = $_GET["nick"];
$post = $_GET["message"];
$aika = date("H:i:s");


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// query
$sql = "INSERT INTO chat values ('','$post', '$nimi', '$aika')";
   if ($conn->query($sql) === true) {
       // echo "New record created successfully";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 echo $sql;

?>