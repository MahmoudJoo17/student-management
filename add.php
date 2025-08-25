<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dept  = $_POST['department'];
    $date  = $_POST['enrollment_date'];

    $sql = "INSERT INTO students (name, email, phone, department, enrollment_date)
            VALUES ('$name', '$email', '$phone', '$dept', '$date')";

    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Add Student</h1>
<form method="POST">
    <label>Name:</label><input type="text" name="name" required><br>
    <label>Email:</label><input type="email" name="email" required><br>
    <label>Phone:</label><input type="text" name="phone"><br>
    <label>Department:</label><input type="text" name="department"><br>
    <label>Enrollment Date:</label><input type="date" name="enrollment_date"><br>
    <button type="submit">Save</button>
</form>
</body>
</html>
