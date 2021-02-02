<?php
// importing phpfunctions
require 'phpfunctions.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['contactEmail'] ) && !empty($_POST['contactEmail'])) {
    // path to the file
    $fileLocation = "./files/contacts.json";
    // in case the file does not exist it will create one. (w+)
    $openFile = fopen($fileLocation, "r+");

    $contactFile = file_get_contents($fileLocation);
    // get the json file and make it a php array with all the information
    $contacts = json_decode($contactFile);
    
    // checking contacts for the first time., if it is null create an empty array
    if($contacts == null){
        $contacts = [];
    }

    // Get info

    // Getting email from contact.php
    $contact = $_POST['contactEmail'];
    // Getting name
    $name = $_POST['contactName'];
    // Getting text
    $text = $_POST['contactText'];
    // function imported from phpfunctions.php
    // getting the user IP
    $ip = getUserIpAddr();
    // Get Date
    $date = date("Y-m-d h:i:s",time());

    // Creating an array element of all the information that has taken
    $contact = ["id" => count($contacts), "name" => $name, "email" => $contact, "text" => $text, "ip" => $ip, "date" => $date];

    // Adding this contact to the array of contacts
    array_push($contacts, $contact);

    // writing the array to a json file
    fwrite($openFile, json_encode($contacts, JSON_PRETTY_PRINT));
    // closing the file
    fclose($openFile);


    // Relocation
    $location = "contact.php?contactEmail=t";
    header('Location: '.$location);
} else {
    $location = "contact.php?contactEmail=f";
    header('Location: '.$location);
}
?>