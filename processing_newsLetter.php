<?php
// Importing phpfunctions
require 'phpfunctions.php';


if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['email'] ) && !empty($_POST['email'])) {
    // Path of the file
    $fileLocation = "./files/emails.json";
    // in case the file does not exist it will create one. (w+)
    $openFile = fopen($fileLocation, "r+");

    
    $EmailFile = file_get_contents($fileLocation);
    // get the json file and make it a php array with all the information
    $emails = json_decode($EmailFile);
    
    // cheking email for the first time, if it is null create an empty array
    if($emails == null){
        $emails = [];
    }

    // Get info

    // Getting email from newsletter.php
    $email = $_POST['email'];
    // function imported from phpfunctions.php
    // Getting user IP
    $ip = getUserIpAddr();
    // Get Date
    $date = date("Y-m-d h:i:s",time());

    // Creating an array element of all the information that has taken
    $email = ["id" => count($emails), "email" => $email, "ip" => $ip, "date" => $date];

    // Adding this email to the array of emails
    array_push($emails, $email);

    // writing the array to a json file
    fwrite($openFile, json_encode($emails, JSON_PRETTY_PRINT));
    // closing the file
    fclose($openFile);

    // relocation
    $location = "index.php?email=t";
    header('Location: '.$location);
} else {
    $location = "index.php?email=f";
    header('Location: '.$location);
}
?>