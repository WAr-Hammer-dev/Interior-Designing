<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ramoju_users";

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        echo "success";
    } else {
        echo "fail";
    }
}
?>