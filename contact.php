<?php 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rexknar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (`name`,`email` , `message`)
VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."')";

if (mysqli_query($conn, $sql)) {
    $output['type']="success";
    $output['message']="Thanks for contacting us, our executive will contact you !";
} else {
    $output['type']="error";
    $output['message']="Sorry! Something went wrong, Please try again.";

mysqli_close($conn);
// return json_encode($output);
echo json_encode($output);

}
?>