<!DOCTYPE = html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Wayne Bookings Hotels
        </title>
        <link rel = "stylesheet" type = "text/css" href = "6WayneBookingsHotels.css">
        <!--
            <style>

            </style>
        -->
    </head>
    <body>
        <header>
            WAYNE TRAVEL BOOKINGS
            <br>
            <em>Travel safely and securely with us</em>
        </header>
        <br>
        <img src = "WayneBookings.png" alt = "Website Label">
        <br> 
        <ul class = "navbar">
            <li class = "navitem"><a href = "1WayneBookingsHomeFlights.php">Flights</a></li>
            <li class = "navitem"><a href = "#5WayneBookingsHotels.php">Hotels</a></li>
            <li class = "navitem"><a href = "9WayneBookingsCarRentals.php">Car Rentals</a></li>
        </ul>
        <br>
        <main>
            <head>
                <h1><strong>Hotels</strong></h1>
            </head>
            <br>
            <form action = "7WayneBookingsHotelsSearchDetails.php" method = "post">
                <fieldset>
                    <legend><strong><em>Enter Hotel Details</em></strong></legend>
                    <br>
                    <label for = "hotelname">Hotel Name:</label>
                    <select id = "hotelname" name = "hotelname" required>
                        <option value = "Any">Please choose from below</option>
                        <option value = "Four Seasons">Four Seasons</option>
                        <option value = "Atlantis Paradise">Atlantis Paradise</option>
                        <option value = "Baccarat Hotels">Baccarat Hotels</option>
                        <option value = "Peninsula Hotels">Peninsula Hotels</option>
                        <option value = "Royal Mansour Hotels">Royal Mansour Hotels</option>
                        <option value = "Tata Taj Group">Tata Taj Group</option>
                        <option value = "CR7 Pestana">CR7 Pestana</option>
                        <option value = "Aman Resorts">Aman Resorts</option>
                        <option value = "Oberoi Group">Oberoi Group</option>
                        <option value = "Marriott Hotels">Marriott Hotels</option>
                        <option value = "Ritz-Carlton">Ritz-Carlton</option>
                    </select>
                    <label for = "moveindate">Move-In Date</label>
                    <input type = "date" id = "moveindate" name = "moveindate" required>
                    <label for = "moveoutdate">Move-Out Date</label>
                    <input type = "date" id = "moveoutdate" name = "moveoutdate" required>
                    <br><br>
                    <label for = "numtravellers">Travellers</label>
                    <input type = "number" id = "numtravellers" name = "numoftravellers" min = "1" max = "15" required>
                </fieldset>
                <br>
                <fieldset>
                    <legend><strong><em>Services Offered</em></strong></legend>
                    <br>
                    <label for = "mealserved">Meals Served</label>
                    <input type = "checkbox" id = "breakfast" name = "mealserved[]" value = "Breakfast">
                    <label for = "breakfast">Breakfast</label>
                    <input type = "checkbox" id = "lunch" name = "mealserved[]" value = "Lunch">
                    <label for = "lunch">Lunch</label>
                    <input type = "checkbox" id = "snacks" name = "mealserved[]" value = "Evening Snacks">
                    <label for = "snacks">Evening Snacks</label>
                    <input type = "checkbox" id = "dinner" name = "mealserved[]" value = "Dinner">
                    <label for = "dinner">Dinner</label>
                    <br><br>
                    <label for = "alcohol">Alcohol Drinks</label>
                    <input type = "radio" id = "alcoholyes" name = "alcoholdrinkserved" value = "Yes">
                    <label for = "alcoholyes">Yes</label>
                    <input type = "radio" id = "alcoholno" name = "alcoholdrinkserved" value = "No">
                    <label for = "alcoholno">No</label>
                    <br><br>
                    <label for = "roomservice">Room Service</label>
                    <input type = "radio" id = "roomserviceyes" name = "roomserviceoffer" value = "Yes">
                    <label for = "roomserviceyes">Yes</label>
                    <input type = "radio" id = "roomserviceno" name = "roomserviceoffer" value = "No">
                    <label for = "roomserviceno">No</label>
                </fieldset>
                <br>
                <br>
                <button type = "submit"><strong>Search</strong></button>
                <button type = "reset"><strong>Cancel</strong></button>
                <br>
                <br>
                <footer><em>
                    @TM Wayne Enterprises
                </em></footer>
                <br>
            </form>
        </main>
    </body>
</html>