<?php include '../db.php'; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Vis klasser</title>
</head>
<body>
    <h2>Alle klasser</h2>
    <table border="1">
        <tr><th>Klassekode</th><th>Klassenavn</th><th>Studiumkode</th></tr>

<?php
$sql = "SELECT * FROM klasse";
$resultat = $conn->query($sql);

while ($rad = $resultat->fetch_assoc()) {
    echo "<tr><td>{$rad['klassekode']}</td><td>{$rad['klassenavn']}</td><td>{$rad['studiumkode']}</td></tr>";
}
$conn->close();
?>
    </table>
</body>
</html>
