<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export de données</title>
</head>
<body>
    <h3>Exporter les données - Voitures</h3>
    <form action="./export.php" method="post">
        <select name="data-format">
            <option value="csv">csv</option>
            <option value="json">json</option>
        </select>
        <button type="submit">Exporter</button>
    </form>
</body>
</html>