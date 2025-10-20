<?php
$server = "localhost";
$bruker = "root";
$passord = "";
$dbnavn = "skole"; // du kan kalle databasen hva du vil

$conn = new mysqli($server, $bruker, $passord, $dbnavn);

if ($conn->connect_error) {
    die("Feil ved tilkobling: " . $conn->connect_error);
}
?>
