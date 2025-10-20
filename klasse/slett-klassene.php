<?php include '../db.php'; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Slett klasse</title>
</head>
<body>
    <h2>Slett klasse</h2>
    <form method="post">
        Velg klassekode:
        <select name="klassekode">
            <?php
            $res = $conn->query("SELECT klassekode FROM klasse");
            while ($r = $res->fetch_assoc()) {
                echo "<option value='{$r['klassekode']}'>{$r['klassekode']}</option>";
            }
            ?>
        </select>
        <input type="submit" value="Slett">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST["klassekode"];
    $conn->query("DELETE FROM klasse WHERE klassekode='$kode'");
    echo "Klassen ble slettet!";
}
$conn->close();
?>
</body>
</html>
