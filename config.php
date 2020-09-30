
<?php
$conn = new mysqli("localhost", "root", "", "yalla_groupe");
if ($conn->connect_error) {
    die("could not connect to the database" . $conn->connect_error);
}


?>

