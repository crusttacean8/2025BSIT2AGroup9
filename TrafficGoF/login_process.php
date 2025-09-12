<?php
session_start();
include "functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pass  = $_POST["password"];

    $users = loadUsers();

    foreach ($users as $u) {
        if ($u["email"] === $email && password_verify($pass, $u["password"])) {
            $_SESSION["user"] = $u["name"];
            header("Location: index.php");
            exit;
        }
    }
    die("❌ Invalid login!");
}
