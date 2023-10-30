<!DOCTYPE = html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>
            Wayne Bookings Hotel Search Details
        </title>
        <link rel = "stylesheet" type = "text/css" href = "8WayneBookingsHotelsSearchdetails.css">
    </head>
    <body>
        <header>
            Wayne Bookings
        </header>
        <img src = "WayneBookings1.jpg" alt = "Wayne Bookings Confirmation Label">
        <br>
        <main>
            <h1>Hotel Search Details</h1>
            <br>
            <ul class = "hotelsearchdetails">
            <li class = "hotelname">Hotel Name: <?php echo $_POST['hotelname'];?></li>
                <br>
                <li class = "moveindate">Move-In Date: <?php echo $_POST['moveindate'];?></li>
                <br>
                <li class = "moveoutdate">Move-Out Date: <?php echo $_POST['moveoutdate'];?></li>
                <br>
                <li class = "NumberTraveller">Number of Travellers: <?php echo $_POST['numoftravellers'];?></li>
            </ul>  
            <br><br>
            <ul class = "hotelservicesdetails">
                <li class = "MealsServed">Meals Required to be Served: 
                    <?php 
                    if(isset($_POST['mealserved']))
                    {
                        $selected_meals = $_POST['mealserved'];
                        foreach($selected_meals as $meal)
                        {
                            echo $meal. " ";
                        }
                    }
                    ?>
                </li>
                <br>
                <li class = "Alcohol">Alcohol Beverages to be served?: <?php echo $_POST['alcoholdrinkserved'];?> </li>
                <br>
                <li class = "RoomServices">Room Services Required?: <?php echo $_POST['roomserviceoffer']?></li>
            </ul>
            <br>
            <p>
                Your Hotel Search Details have been received by Wayne Bookings and we will connect with you in the next 24 hours to 
                confirm the booking with you. Additional discount offers may also be available but varies on a day-to-day basis.
            </p>
        </main>
        <br>
        <footer><em>
            @TM Wayne Enterprises
        </em></footer>
        <br>
    </body>
</html>