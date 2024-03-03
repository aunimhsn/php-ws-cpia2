<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get: destination</title>
</head>
<body>
    <?=$_GET['secret']?>
    
    <!-- 6. -->
    <?=mb_strlen($_GET['secret'], 'UTF-8')?>
</body>
</html>