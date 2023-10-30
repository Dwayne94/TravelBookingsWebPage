<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <title>
            Wayne Bookings Flight Search Details
        </title>
        <link rel = "stylesheet" href = "4WayneBookingsFlightsSearchdetails.css">
    </head>
    <body>
        <header>
            Wayne Bookings
        </header>
        <img src = "WayneBookings1.jpg" alt = "Wayne Bookings label">
        <br>
        <main>
            <h1>Flight Search details</h1>
            <br>
            <ul class = "flightsearchdetails">
                <li class = "departairport">Departure Airport: <?php echo $_POST['departureairport'];?></li>
                <br>
                <li class = "arriveairport">Arrival Airport: <?php echo $_POST['arrivalairport'];?></li>
                <br>
                <li class = "departdate">Departure Date: <?php echo $_POST['departuredate'];?></li>
                <br><br>
                <li class = "NumberTraveller">Number Of Travellers: <?php echo $_POST['numberoftravellers'];?></li>
                <br>
                <li class = "airlinename">Airline Carrier: <?php echo $_POST['airline'];?></li>
                <br>
                <li class = "TicketType">Ticket Class: <?php echo $_POST['ticketclass'];?></li>
            </ul>
            <br>
            <ul class = "accountdetails">
                <li class = "email">Email: <?php echo $_POST['emailid'];?></li>
                <br>
                <li class = "contact">Contact: <?php echo $_POST['contactnumber']?></li>
            </ul>
            <br><br>
            <p>Your Flight Search Details have been received by Wayne Bookings and we will connect with you in the next 24 hours to 
                confirm the booking with you. Additional discount offers may also be available but varies on a day-to-day basis. 
            </p>
        </main>
        <br><br> 
        <footer><em>
            @TM Wayne Enterprises
        </em></footer>
    </body>
</html>