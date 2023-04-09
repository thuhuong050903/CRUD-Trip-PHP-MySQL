<?php 
include ("connect.php");
// $sql = "CREATE DATABASE booking_project";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// };

$sql = "CREATE TABLE acc 
( id_acc INT NOT NULL PRIMARY KEY ,
user_name VARCHAR (100) NOT NULL,
user_password VARCHAR (20) NOT NULL,
token VARCHAR (20) NOT NULL);
";

$sql ="CREATE TABLE users
( id_user INT NOT NULL PRIMARY KEY ,
id_acc INT NOT NULL,
user_name VARCHAR(100) NOT NULL,
user_email VARCHAR (100) NOT NULL,
user_address VARCHAR(100) NOT NULL,
user_phone VARCHAR(11) NOT NULL,
FOREIGN KEY (id_acc) REFERENCES acc(id_acc));
";


$sql="CREATE TABLE book_cars 
( id_bookcar INT NOT NULL PRIMARY KEY ,
id_user INT NOT NULL,
quantity INT NOT NULL,
price INT NOT NULL,
FOREIGN KEY (id_user) REFERENCES users(id_user));";

$sql ="CREATE TABLE drivers (
id_driver INT NOT NULL PRIMARY KEY ,
 id_acc INT NOT NULL,
driver_name VARCHAR(100) NOT NULL,
driver_image VARCHAR(255) NOT NULL,
driver_description VARCHAR(255) NOT NULL,
driver_license VARCHAR (100) NOT NULL,
driver_address VARCHAR(255) NOT NULL,
driver_age INT NOT NULL,
driver_phone VARCHAR(11) NOT NULL,
FOREIGN KEY (id_acc) REFERENCES acc(id_acc));";

$sql="CREATE TABLE vehicles (
id_vehicle INT NOT NULL PRIMARY KEY ,
vehicle_name VARCHAR(100) NOT NULL,
vehicle_type VARCHAR(100) NOT NULL,
vehicle_image VARCHAR(255) NOT NULL,
vehicle_capacity VARCHAR(10) NOT NULL,
seat INT NOT NULL,
vehicle_description VARCHAR(255) NOT NULL,
price_book NUMERIC NOT NULL,
price_ship NUMERIC NOT NULL);";

$sql="CREATE TABLE trips (
id_trip INT NOT NULL PRIMARY KEY ,
id_driver INT NOT NULL,
id_vehicle INT NOT NULL,
departure VARCHAR(255) NOT NULL,
destination VARCHAR(255) NOT NULL,
trip_date DATETIME NOT NULL,
trip_status VARCHAR(50) NOT NULL,
FOREIGN KEY (id_driver) REFERENCES drivers (id_driver),
FOREIGN KEY (id_vehicle) REFERENCES vehicles (id_vehicle));";

$sql="CREATE TABLE items (
id_item INT NOT NULL PRIMARY KEY ,
id_user INT NOT NULL,
id_trip INT NOT NULL,
item_name VARCHAR(100) NOT NULL,
item_weight INT NOT NULL,
item_description VARCHAR(255) NOT NULL,
quantity INT NOT NULL,
FOREIGN KEY (id_user) REFERENCES users(id_user),
FOREIGN KEY (id_trip) REFERENCES trips(id_trip));";

$sql="CREATE TABLE payment (
id_payment INT NOT NULL PRIMARY KEY ,
id_item INT NOT NULL,
id_bookcar INT NOT NULL,
payment_method VARCHAR(50) NOT NULL,
amount INT NOT NULL,
payment_status VARCHAR(100) NOT NULL,
FOREIGN KEY (id_item) REFERENCES items(id_item),
FOREIGN KEY (id_bookcar) REFERENCES book_cars (id_bookcar));";


$sql="CREATE TABLE orders (
id_order INT NOT NULL PRIMARY KEY ,
id_trip INT NOT NULL,
id_payment INT NOT NULL,
order_status VARCHAR(50) NOT NULL,
FOREIGN KEY (id_payment) REFERENCES payment (id_payment),
FOREIGN KEY (id_trip) REFERENCES trips(id_trip));
";
    
if ($conn->query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();



?>