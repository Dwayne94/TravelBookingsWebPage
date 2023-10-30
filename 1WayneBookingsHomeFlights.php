<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>
            Wayne Bookings Home Flights
        </title>
        <link rel = "stylesheet" href = "2WayneBookingsHomeFlights.css">
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
            <li class = "navitem"><a href = "#1WayneBookingsHomeFlights.php">Flights</a></li>
            <li class = "navitem"><a href = "5WayneBookingsHotels.php">Hotels</a></li>
            <li class = "navitem"><a href = "9WayneBookingsCarRentals.php">Car Rentals</a></li>
        </ul>
        <br>
        <main>
            <h1><strong>Flights</strong></h1>
            <br>
            <form action = "3WayneBookingsFlightsSearchDetails.php" method = "post">
                <fieldset>
                    <legend><strong><em>Enter Flight Details</em></strong></legend>
                    <label for = "depairport">Departure Airport</label> 
                    <input type = "text" id = "depairport" name = "departureairport" placeholder = "Departure Airport" required>
                    <label for = "arrairport">Arrival Airport</label>
                    <input type = "text" id = "arrairport" name = "arrivalairport" placeholder = "Arrival Airport" required>
                    <label for = "depdate">Date of Departure</label>
                    <input type = "date" id = "depdate" name = "departuredate" required>
                    <br>
                    <br>
                    <label for = "numtraveller">Travellers:</label>
                    <input type = "number" id = "numtraveller" name = "numberoftravellers" placeholder = "Tavellers:" min = "1" max = "15" required>
                </fieldset>
                <br>
                <br>
                <fieldset>
                    <legend><strong><em>Airline Details</em></strong></legend>
                        <label for = "airlinetype">Choose Airline:</label>
                        <select id = "airlinetype" name = "airline" required>
                            <option value = "Any">Please choose below</option>
                            <option value = "Air India">Air India</option>
                            <option value = "Emirates">Emirates</option>
                            <option value = "Etihad Airways">Etihad Airways</option>
                            <option value = "Kuwait Airways">Kuwait Airways</option>
                            <option value = "Turkish Airlines">Turkish Airlines</option>
                            <option value = "Singapore Airlines">Singapore Airlines</option>
                            <option value = "Air China">Air China</option>
                            <option value = "United Airlines">United Airlines</option>
                            <option value = "Air France">Air France</option>
                            <option value = "Air Canada">Air Canada</option>
                            <option value = "Lufthansa Airways">Lufthansa Airways</option>
                            <option value = "Swiss Airways">Swiss Airways</option>
                            <option value = "Cathay Pacific">Cathay Pacific</option>
                            <option value = "Air NewZealand">Air NewZealand</option>
                        </select>
                        <label for = "ticketclass">Ticket Class:</label>
                        <input type = "radio" id = "firstclass" name = "ticketclass" value = "First Class">
                        <label for = "firstclass">First Class</label>
                        <input type = "radio" id = "businessclass" name = "ticketclass" value = "Business Class">
                        <label for = "businessclass">Business Class</label>
                        <input type = "radio" id = "economyclass" name = "ticketclass" value = "Economy">
                        <label for = "economyclass">Economy</label>
                </fieldset>
                <br>
                <br>
                <button type = "submit"><strong>Search</strong></button>
                <button type = "reset"><strong>Cancel</strong></button>
                <br>
                <br>
                <fieldset>
                    <legend><strong><em>Contact Details</em></strong></legend>
                    <label for = "email">Email:</label>
                    <input type = "email" id = "email" name = "emailid" placeholder = "Email Address" required>
                    <label for = "contact">Contact Number:</label>
                    <input type = "text" id = "contact" name = "contactnumber" placeholder = "Contact Number" required>
                    <p>
                        I agree to abide and consent to all the rules set by Wayne Bookings. Any change in bookings will result in additional charges
                        as per the rules of the company
                    </p>
                </fieldset>
                <br> 
                <footer>
                    <em>@TM Wayne Enterprises</em>
                </footer>
                <br>
            </form>
        </main>
    </body>
</html>
