<?php include '../db.php'; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Registrer klasse</title>
</head>
<body>
    <h2>Registrer ny klasse</h2>
    <form method="post">
        Klassekode: <input type="text" name="klassekode" required><br>
        Klassenavn: <input type="text" name="klassenavn" required><br>
        Studiumkode: <input type="text" name="studiumkode" required><br>
        <input type="submit" value="Registrer">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST["klassekode"];
    $navn = $_POST["klassenavn"];
    $studium = $_POST["studiumkode"];

    $sql = "INSERT INTO klasse VALUES ('$kode', '$navn', '$studium')";
    if ($conn->query($sql)) {
        echo "Klassen ble registrert!";
    } else {
        echo "Feil: " . $conn->error;
    }
}
$conn->close();
?>
</body>
</html>
