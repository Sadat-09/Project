
<?php
require_once('../model/BookingModel.php');
if (isset($_POST['submit'])) {
    //$id=  $_POST['id'];
    $id = $_POST['id'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $Hname=$_POST['hotelname'];
   
    CancelRoomBooking($id);
    CancelRoomNotificationInsert($location,$Hname,$date);
    echo "Room cancelled";
   

}

if (isset($_POST['submit2'])) {

    $id = $_POST['id'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    CancelflightBooking($id);
    cancelflightNotificationInsert($from,$to,$date,$time);
   echo "Flight Canceled";
}
 





  ?>  



