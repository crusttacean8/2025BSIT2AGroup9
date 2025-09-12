<?php
session_start();
include "functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $pass  = $_POST["password"];
    $cpass = $_POST["confirm_password"];

    if ($pass !== $cpass) die("❌ Passwords do not match!");

    $users = loadUsers();

    // check if email exists
    foreach ($users as $u) {
        if ($u["email"] === $email) die("❌ Email already taken!");
    }

    // add new user
    $users[] = ["name" => $name, "email" => $email, "password" => password_hash($pass, PASSWORD_DEFAULT)];
    saveUsers($users);

    $_SESSION["user"] = $name;
    header("Location: index.php");
    exit;
}
