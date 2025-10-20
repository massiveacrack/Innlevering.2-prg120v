<?php include '../db.php'; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Registrer student</title>
</head>
<body>
    <h2>Registrer ny student</h2>
    <form method="post">
        Brukernavn: <input type="text" name="brukernavn" required><br>
        Fornavn: <input type="text" name="fornavn" required><br>
        Etternavn: <input type="text" name="etternavn" required><br>
        Klassekode:
        <select name="klassekode">
            <?php
            $res = $conn->query("SELECT klassekode FROM klasse");
            while ($r = $res->fetch_assoc()) {
                echo "<option value='{$r['klassekode']}'>{$r['klassekode']}</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Registrer">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bn = $_POST["brukernavn"];
    $fn = $_POST["fornavn"];
    $en = $_POST["etternavn"];
    $kl = $_POST["klassekode"];

    $sql = "INSERT INTO student VALUES ('$bn', '$fn', '$en', '$kl')";
    if ($conn->query($sql)) {
        echo "Studenten ble registrert!";
    } else {
        echo "Feil: " . $conn->error;
    }
}
$conn->close();
?>
</body>
</html>

