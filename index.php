<?php
// Dohvat kolačića
$user = isset($_COOKIE['user']) ? $_COOKIE['user'] : 'Nepoznati korisnik';
$newsPreference = isset($_COOKIE['news']) ? $_COOKIE['news'] : 'Nije postavljeno';
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz Kolačića</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #dff0d8;
            color: #3c763d;
            border-radius: 5px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #5cb85c;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vaši Kolačići</h1>
        <div class="result">
            <p><strong>Korisnik:</strong> <?php echo htmlspecialchars($user); ?></p>
            <p><strong>Preferencija vijesti:</strong> <?php echo htmlspecialchars($newsPreference); ?></p>
        </div>
        <a href="news.php">Promijenite preferencije</a>
    </div>
</body>
</html>
