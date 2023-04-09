
<?php
include ("connect.php");
$trip_id = $_GET['trip_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  // Xóa chuyến xe
    $sql = "DELETE FROM trips WHERE id_trip=$trip_id";

  if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert ('Trip deleted successfully');
    window.location.href = 'show-trip.php';
    </script>";
    exit;
  } else {
    echo "Error deleting-trip " . $conn->error;
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <style>
       body{
        background-color: #252628;
        color:white;
       } 
       input {
        background-color: yellow;
        width: 60px;
        height: 30px;
        border-radius:10px ;
        border: none;
       }
       a {
        text-decoration: none;
        color: white;
        
       }
       button {
        background-color: #3b4b4b;
        width: 60px;
        height: 30px;
        border-radius:10px ;
       }
    </style>
</head>
<body>
<h2>Confirm delete</h2>

<p>Are you sure you want to delete this trip?</p>

<form method="post">
  <input type="submit" value="Delete">
  <button><a href="show-trip.php">Cancel</a></button>
</form>
</body>
</html>

