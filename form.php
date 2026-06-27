<?php
include 'db.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    $sql = "INSERT INTO students (name, email, phone, course, gender, message)
            VALUES ('$name', '$email', '$phone', '$course', '$gender', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>

<body>

    <h1>Student Registration Form</h1>

    <form method="POST" action="">

        <label>Name:</label><br>
        <input type="text" name="name" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required>
        <br><br>

        <label>Course:</label><br>
        <select name="course">
            <option value="BSc">B.Sc</option>
            <option value="MSc">M.Sc</option>
            <option value="BTech">B.Tech</option>
            <option value="MTech">M.Tech</option>
        </select>
        <br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        <br><br>

        <label>Message:</label><br>
        <textarea name="message" rows="5" cols="40"></textarea>
        <br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

</body>
</html>