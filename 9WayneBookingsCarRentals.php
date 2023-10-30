<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Wayne Bookings Car Rentals</title>
        <link rel = "stylesheet" type = "text/css" href = "10WayneBookingsCarRentals.css">
    </head>
    <body>
        <header>
            WAYNE TRAVEL BOOKINGS
            <br>
            <em>Travel safely and securely with us</em>
        </header>
        <br>
        <img src = "WayneBookings.png" alt = "Wayne Bookings Label">
        <br> 
        <main>
            <ul class = "navbar">
                <li class = "navitem"><a href = "1WayneBookingsHomeFlights.php">Flights</a></li>
                <li class = "navitem"><a href = "5WayneBookingsHotels.php">Hotels</a></li>
                <li class = "navitem"><a href = "#9WayneBookingsCarRentals.php">Car Rentals</a></li>
            </ul>
            <br>
            <h1>Car Rentals</h1>
            <br>
            <form action = "11WayneBookingsCarRentalsSearchDetails.php" method = "post">
                <fieldset>
                    <legend><em>Car Pickup Details</em></legend>
                    <br>
                    <label for = "pickuploc">Pick-Up Location</label>
                    <input type = "text" id = "pickuploc" name = "pickuplocation" placeholder="Pick-Up Location" required>
                    <label for = "pickupdate">Pick-Up Date</label>
                    <input type = "date" id = "pickupdate" name = "pickupdate" required>
                    <label for = "dropoffdate">Drop-Off Date</label>
                    <input type = "date" id = "dropoffdate" name = "dropoffdate" required>
                    <br><br>
                    <label for = "rentalagency">Car Rental Agency</label>
                    <select id = "rentalagency" name = "carrentalagency" required>
                        <option value = "Any">Any</option>
                        <option value = "Hertz">Hertz</option>
                        <option value = "Enterprise">Enterprise</option>
                        <option value = "Turo">Turo</option>
                        <option value = "Avis">Avis</option>
                        <option value = "Zipcar">Zipcar</option>
                        <option value = "Alamo">Alamo</option>
                        <option value = "National Car Rental">National Car Rental</option>
                        <option value = "Orbitz">Orbitz</option>
                        <option value = "Budget">Budget</option>
                    </select>
                </fieldset>
                <br>
                <fieldset>
                    <legend><em>Vehicle Details</em></legend>
                    <br>
                    <label for = "manufacturer">Automobile Manufacturer</label>
                    <select id = "manufacturer" name = "automanufacturer" required>
                        <option value = "Any">Any</option>
                        <option value = "Chevrolet">Chevrolet</option>
                        <option value = "Dodge">Dodge</option>
                        <option value = "BMW">BMW</option>
                        <option value = "Mercedes">Mercedes</option>
                        <option value = "Audi">Audi</option>
                        <option value = "RangeRover">Range Rover</option>
                        <option value = "Toyota">Toyota</option>
                        <option value = "Honda">Honda</option>
                        <option value = "Tesla">Tesla</option>
                        <option value = "Ford">Ford</option>
                        <option value = "Mazda">Mazda</option>
                        <option value = "Nissan">Nissan</option>
                        <option value = "Chrysler">Chrysler</option>
                    </select>
                    <label for = "automobiletype">Automobile Type</label>
                    <input type = "radio" id = "coupe" name = "autotype" value = "Coupe">
                    <label for = "coupe">Coupe</label>
                    <input type = "radio" id = "sedan" name = "autotype" value = "Sedan">
                    <label for = "sedan">Sedan</label>
                    <input type = "radio" id = "suv" name = "autotype" value = "SUV">
                    <label for = "suv">SUV</label>
                    <input type = "radio" id = "van" name = "autotype" value = "Van">
                    <label for = "van">Van</label>
                </fieldset>
                <br> 
                <fieldset>
                    <legend><em>Customer Identification</em></legend>
                    <br>
                    <label for = "customername">Customer Name</label>
                    <input type = "text" id = "customername" name = "customername" placeholder = "Customer Name" required>
                    <label for = "identification">Identification Document:</label>
                    <input type = "checkbox" id = "driverlicense" name = "identification[]" value = "Driver License">
                    <label for = "driverlicense">Driver License</label>
                    <input type = "checkbox" id = "governmentid" name = "identification[]" value = "Government ID">
                    <label for = "governmentid">Government ID</label>
                </fieldset>
                <br>
                <fieldset>
                    <legend><em>Customer Details</em></legend>
                    <br>
                    <label for = "email">Email</label>
                    <input type = "text" id = "email" name = "emailaddress" placeholder = "Email" required>
                    <label for = "contact">Contact Number</label>
                    <input type = "text" id = "contact" name = "contactnumber" placeholder = "Contact Number" required>
                </fieldset>
                <br>
                <button type = "submit"><strong>Search</strong></button>
                <button type = "reset"><strong>Cancel</strong></button>
                <br><br>
                <footer><em>
                    @TM Wayne Enterprises
                </em></footer>
                <br><br>
            </form>
        </main>
    </body>
</html>