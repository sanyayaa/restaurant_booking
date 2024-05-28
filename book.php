<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_name";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $number_of_people = $_POST["number_of_people"];

    // Insert data into the booking table
    $sql = "INSERT INTO booking_table (name, email, phone, date, time, number_of_people) VALUES ('$name', '$email', '$phone', '$date', '$time', '$number_of_people')";
    if (mysqli_query($conn, $sql)) {
        echo "Booking sent successfully!";
    } else {
        echo "Error sending booking: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>