<?php
// This is an example of config.php
$dbhost = 'localhost';
$dbuser = 'kwmobileweb';
$dbpass = 'Lampstack124901!';
$dbname = 'uddha';
?>
<?php
// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
