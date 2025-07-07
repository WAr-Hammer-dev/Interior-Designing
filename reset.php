<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ramoju_users";

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $newpass = md5($_POST["new_password"]);

    $sql = "UPDATE users SET password='$newpass' WHERE email='$email'";
    if ($conn->query($sql) === TRUE) {
        echo "reset_success";
    } else {
        echo "reset_fail";
    }
}
?>