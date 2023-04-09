<?php 
    include ("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit trip</title>
</head>
<body>
    <?php 
        $trip_id =$_POST["trip_id"];
        $driver_id = $_POST["driver_id"];
        $vehicle_id =$_POST["vehicle_id"];
        $departure = $_POST["departure"];
        $destination = $_POST["destination"];
        $trip_date = $_POST["trip_date"];
        $trip_status = $_POST["trip_status"];
        $price_book =$_POST["price_book"];
        $price_ship = $_POST["price_ship"];

        $sql = "UPDATE trips SET id_trip = '$trip_id', id_driver = '$driver_id', id_vehicle = '$vehicle_id', departure = '$departure', destination = '$destination' ,trip_date='$trip_date', 
        trip_status='$trip_status', price_book='$price_book',price_ship='$price_ship' WHERE id_trip = '$trip_id'";
    
        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert ('Trip updated successfully');
            window.location.href= 'show-trip.php';
            </script>";
            } else {
            echo "<script>alert('Error updating trip:')</script> ". $conn->error;
            }
            
            $conn->close();
    ?>
</body>
</html>