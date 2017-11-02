

<?php
$servername = "localhost";
$username = "root";
$password = "Subhamsa1@";
$dbname = "sampledatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT * FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["NAME"]. " -Place: " . $row["Place"],"\n";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

