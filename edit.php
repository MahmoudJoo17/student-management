<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$student = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dept  = $_POST['department'];
    $date  = $_POST['enrollment_date'];

    $sql = "UPDATE students SET 
            name='$name', email='$email', phone='$phone', department='$dept', enrollment_date='$date'
            WHERE id=$id";

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
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Edit Student</h1>
<form method="POST">
    <label>Name:</label><input type="text" name="name" value="<?= $student['name'] ?>" required><br>
    <label>Email:</label><input type="email" name="email" value="<?= $student['email'] ?>" required><br>
    <label>Phone:</label><input type="text" name="phone" value="<?= $student['phone'] ?>"><br>
    <label>Department:</label><input type="text" name="department" value="<?= $student['department'] ?>"><br>
    <label>Enrollment Date:</label><input type="date" name="enrollment_date" value="<?= $student['enrollment_date'] ?>"><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
