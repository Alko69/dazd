<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <p>
    Bonjour, <?= $_POST["fname"] . " " . $_POST["lname"]; ?>
    </p>
    
    <p>Vous êtes né le : <?= $_POST["age"]; ?></p>
    
    
</body>
</html>