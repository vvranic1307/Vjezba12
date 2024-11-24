<?php
// Postavljanje kolačića
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $newsPreference = isset($_POST['news']) ? $_POST['news'] : '';

    // Postavljanje kolačića za korisnika i preferencije vijesti
    setcookie("user", $user, time() + (86400 * 30), "/"); // Vrijedi 30 dana
    setcookie("news", $newsPreference, time() + (86400 * 30), "/"); // Vrijedi 30 dana

    // Preusmjeravanje na index.php za prikaz kolačića
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postavljanje Kolačića</title>
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
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        input, select, button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Postavljanje Kolačića</h1>
        <form method="post" action="">
            <label for="user">Ime korisnika:</label>
            <input type="text" id="user" name="user" placeholder="Unesite svoje ime" required>

            <label for="news">Preferencija vijesti:</label>
            <select id="news" name="news">
                <option value="politika">Politika</option>
                <option value="sport">Sport</option>
                <option value="tehnologija">Tehnologija</option>
                <option value="zabava">Zabava</option>
            </select>

            <button type="submit">Spremi preferencije</button>
        </form>
    </div>
</body>
</html>
