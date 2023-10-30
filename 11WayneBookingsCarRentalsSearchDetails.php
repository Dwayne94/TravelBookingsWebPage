<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Wayne Bookings Car Rental Details</title>
        <link rel = "stylesheet" type = "text/css" href = "12WayneBookingsCarRentalsSearchDetails.css">
    </head>
    <body>
        <header>
            Wayne Bookings
        </header>
        <br>
        <img src = "WayneBookings1.jpg" alt = "Wayne Bookings Confirmation Label">
        <br>
        <main>
            <h1>Car Pick Up Details</h1>
            <ul class = "carpickupdetails">
                <li class = "carpickuplocation">Vehicle Pick-Up Location: <?php echo $_POST['pickuplocation'];?></li>
                <br>
                <li class = "carpickupdate">Vehicle Pick-Up Date: <?php echo $_POST['pickupdate'];?></li>
                <br>
                <li class = "cardropoffdate">Vehicle Drop-Off Date: <?php echo $_POST['dropoffdate'];?></li>
                <br>
                <li class = "carrentalagency">Vehicle Rental Agency: <?php echo $_POST['carrentalagency'];?></li>
            </ul>
            <br>
            <h1>Vehicle Details</h1>
            <ul class = "vehicledetails">
                <li class = "vehiclemake">Automobile Manufacturer: <?php echo $_POST['automanufacturer'];?></li>
                <br>
                <li class = "vehicletype">Automobile Type: <?php echo $_POST['autotype']?></li>
            </ul>
            <br>
            <h1>Customer Identification</h1>
            <ul class = "customeridentification">
                <li class = "customername">Customer Name: <?php echo $_POST['customername'];?></li>
                <br>
                <li class = "identitydocument">Identification Documents Required: 
                <?php
                    if (isset($_POST['identification']))
                    {
                        $selected_iddocuments = $_POST['identification'];
                        foreach($selected_iddocuments as $iddocs)
                        {
                            echo $iddocs. " ";
                        }
                    }  
                ?>
                </li>
            </ul>
            <br>
            <h1>Customer Information</h1>
            <ul class = "customerdetails">
                <li class = "customeremail">Customer Email: <?php echo $_POST['emailaddress'];?></li>
                <br>
                <li class = "customercontact">Customer Contact Number: <?php echo $_POST['contactnumber'];?></li>
            </ul>
            <br>
            <p>
                Your Vehicle Rental Search Details have been received by Wayne Bookings and we will connect with you in the next 
                24 hours to confirm the booking with you. Additional discount offers may also be available but varies on a 
                day-to-day basis.
            </p>
        </main>
        <br>
        <footer><em>
            @TM Wayne Enterprises
        </em></footer>
        <br>
    </body>
</html>