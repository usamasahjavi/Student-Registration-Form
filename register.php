<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "student_db");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fname = $_POST['fname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (fname, email) VALUES ('$fname', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
