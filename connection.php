 <?php
$env = parse_ini_file('.env');

$servername = $env["DB_HOST"] ?: ""; // Server name where the app has the DB
$username = $env["DB_USERNAME"] ?:  ""; // user of the DB 
$password = $env["DB_PASSWORD"] ?:  ""; // password of the DB
$dbname = $env["DB_DATABASE"] ?:  ""; // DB name 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 