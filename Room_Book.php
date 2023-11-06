<html>
<head>
    <title>Room Booking </title>
</head>
<body>
    <fieldset>
        <legend>RoomBook</legend>
    <form action="../controller/Room_validation.php" method="post">
        Name:
    
        <input type="text"  name="name" ><br><br>
        Email:

     
        <input type="email"  name="email" ><br><br>

        Room Type:
        <input type="checkbox" name="roomtype" value="single"> single
        <input type="checkbox" name="roomtype" value="double"> double<br>

            
        location:

        <select  name="location">
        <option value="Dhaka">Dhaka</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Comilla">Comilla</option>
        
    </select><br><br>
    
    
        <input type="submit" name="submit" value="Find Room">
    </form>


    <form action="../controller/MyBookings.php" method="post">
    <input type="submit"name="submit1"value=" My Bookings">
        </form>
        
        <form action="../controller/notification.php" method="post">
    <input type="submit"name="submit2"value=" Notifications">
        </form>
</fieldset>
</body>
</html>
