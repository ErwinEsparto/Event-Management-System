<?php
    session_start();

    $DBHost = "localhost";
    $DBUser = "root";
    $DBPass = "";
    $DBName = "eventsdb";
    $conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['registerNow'])) {
        $studentName = $_POST['studentName'];
        $studentYS = $_POST['studentYS'];
        $studentNumber = $_POST['studentNumber'];
        $studentEmail = $_POST['studentEmail'];

        $insertQuery = "INSERT INTO participants (fullName, yearCourse, studentNumber, emailAddress) VALUES ('$studentName', '$studentYS', '$studentNumber', '$studentEmail')";

        if (mysqli_query($conn, $insertQuery)) {
            echo "<script>alert('Register successfully'); window.location.href = 'http://localhost/Event-Management-System/html/home.php';</script>";
        } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>