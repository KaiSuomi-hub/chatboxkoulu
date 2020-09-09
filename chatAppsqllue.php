<!-- lue.php -->
<?php 
$username = "root"; 
$password = ""; 
$database = "koe"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM chat ORDER BY id ";

$x = 1;


    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field2name = $row["chat"];
            $field3name = $row["nick"];
            $field4name = $row["time"];

            
            echo '<b>'.$field2name.'</b> '.'<i>'.$field4name.'</i> :'.$field3name.'<br>';

                
        }
        $result->free();
} 


?>