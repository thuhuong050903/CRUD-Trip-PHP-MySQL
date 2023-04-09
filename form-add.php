<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trip</title>
    <style>
    .form-trips {
        margin: auto;
        width:60%;
        height: 620px;
        line-height: 30px;
        background-color: #252628 ;
        color: aliceblue;

    }
    .form-trips .title {
        margin-left: 10%;
        width: 10em;
    }
    .form-trips .input-form{
        background-color: #3b4b4b;
        border-radius: 5px;
        border: none;
        width: 70%;
        height: 30px;
        margin-left: 15%;
        color: aliceblue;
        
    }

    .submit-button {
        margin-left: 40%;
        width: 10%;
        font-weight: 700;
        height: 30px;
        background-color: yellow;
        border: none;
        border-radius: 10px;
    }
    </style>
</head>
<body>
<form action="add-trip.php" method="post" class="form-trips">
        <label class="title" for="trip_id">Trip ID:</label><br>
        <input class="input-form" type="text" id="trip_id" name="trip_id"><br>

        <label class="title" for="driver_id">Driver ID:</label><br>
        <input class="input-form" type="text" id="driver_id" name="driver_id"><br>

        <label class="title" for="vehicle_id">Vehicle ID:</label><br>
        <input class="input-form" type="text" id="vehicle_id" name="vehicle_id"><br>
        
        <label class="title" for="departure">Departure: </label><br>
        <input class="input-form" type="text" id="departure" name="departure"><br>

        <label class="title" for="destination">Destination: </label><br>
        <input class="input-form" type="text" id="destination" name="destination"><br>

        <label class="title" for="trip_date">Trip date: </label><br>
        <input class="input-form" type="datetime-local" id="trip_date" name="trip_date"><br>

        <label class="title" for="trip_status">Trip Status:</label><br>
        <input class="input-form" type="number" id="trip_status" name="trip_status"><br>
        
        <label class="title" for="price_book">Price Booking:</label><br>
        <input class="input-form" type="number" id="price_book" name="price_book"><br>

        <label class="title" for="price_ship">Price Ship:</label><br>
        <input class="input-form" type="number" id="price_ship" name="price_ship"><br>
        <br>
        <input class="submit-button" type="submit" value="Add Trip">

    </form>
 
</body>
</html>