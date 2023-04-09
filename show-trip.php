<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./show-trip.css"> -->
    <title>Show trip</title>
    <style>
        .show-trips {
            color:aliceblue;
            border:0px;
                }

        .show-trips .title td {
            font-weight: 700;
            background-color: #252628;
        }
        .show-trips td {
            background-color: #3b4b4b;
            border: 0.5px solid #252628;
        }
        .edit-delete {
            width:7%;
        }
        .edit-delete a{
            color: yellow;
            text-decoration: none;
        }

    </style>
</head>
<body>

<table class="show-trips" style="width:100%" >
    <thead >
        <tr class="title">
            <td>Trip id</td>
            <td>Driver id</td>
            <td>Vehicle id</td>
            <td>Departure</td>
            <td>Destination</td>
            <td>Date</td>
            <td>Status</td>
            <td>Price book</td>
            <td>Price ship</td>
            <td></td>
        </tr>
        
    </thead>
    <tbody>
    <?php 
        include ("connect.php");

        $sql = "SELECT id_trip,id_driver,id_vehicle, departure, destination, trip_date, trip_status, price_book, price_ship FROM trips";
        $result = mysqli_query($conn,$sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){

            echo '<tr>';
            echo '<td>'.$row['id_trip'].'</td>';
            echo '<td>'.$row['id_driver'].'</td>';
            echo '<td>'.$row['id_vehicle'].'</td>';
            echo '<td>'.$row['departure'].'</td>';
            echo '<td>'.$row['destination'].'</td>';
            echo '<td>'.$row['trip_date'].'</td>';
            echo '<td>'.$row['trip_status'].'</td>';
            echo '<td>'.$row['price_book'].'</td>';
            echo '<td>'.$row['price_ship'].'</td>';
            echo "<td class='edit-delete'>";
            echo "<a  style='color:yellow; text-decoration: none;'href='form-edit.php?trip_id=" . $row["id_trip"] . "'>Edit</a>";
            echo " | ";
            echo "<a style='color:yellow; text-decoration: none;' href='delete-trip.php?trip_id=" . $row["id_trip"] . "'>Delete</a>";
            echo "</td>";
            echo '</tr>';
            }}
    $conn->close();
    ?>

    </tbody>
</body>
</html>