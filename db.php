<?php
$servername = "localhost";
$username = "root";   // اسم المستخدم بتاع MySQL
$password = "joo12345";       // لو عامل باسورد حطه هنا
$dbname = "student_management";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
