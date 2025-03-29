<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name1"]) ;
    $email = isset($_POST["email"]) ;
    $date = isset($_POST["date"]) ;
    $time = isset($_POST["time"]);
    $number = isset($_POST["number"]);

 
        
        echo "Booking successful! Thank you, " . $name . ".";
         

} else {
    echo "Invalid request.";
}
?>