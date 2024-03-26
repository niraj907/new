<?php
session_start(); // Start the session

$connection = mysqli_connect("localhost", "root", "", "restaurant"); // Establish the database connection

if(isset($_POST['save_data']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];

    $insert_query = "INSERT INTO text (name, email, phone, booking_date, booking_time, adults, children) VALUES ('$name', '$email', '$phone', '$booking_date', '$booking_time', '$adults', '$children')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run){
        $_SESSION['status'] = "Data inserted successfully";
    header('location: index.php');
    } else {
        $_SESSION['status'] = "Insertion of data failed";
        header('location: index.php');
    }
}
?>
