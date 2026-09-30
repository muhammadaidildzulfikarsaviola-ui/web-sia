<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "aidil" && $password == "12345") {
    header("Location: ../pages/dashboard.php");
    exit;
} else {
    echo "Username atau password salah";
}