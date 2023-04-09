<?php 
include ("connect.php");

$trip_id =$_POST["trip_id"];
$driver_id = $_POST["driver_id"];
$vehicle_id =$_POST["vehicle_id"];
$departure = $_POST["departure"];
$destination = $_POST["destination"];
$trip_date = $_POST["trip_date"];
$trip_status = $_POST["trip_status"];
$price_book =$_POST["price_book"];
$price_ship = $_POST["price_ship"];

// Thêm chuyến xe vào cơ sở dữ liệu
$sql = "INSERT INTO trips(id_trip,id_driver,id_vehicle, departure, destination, trip_date, trip_status, price_book, price_ship)
        VALUES ('$trip_id','$driver_id', '$vehicle_id','$departure', '$destination', '$trip_date', '$trip_status','$price_book',$price_ship)";

if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Trip added successfully');
    window.location.href = 'show-trip.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>