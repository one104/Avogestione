<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <title>Registrazione</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>

<h2>BENVENUTO</h2>
<h3>INSERISCI I TUOI DATI PER REGISTRATI</h3>

<form method="post" action="index.php?action=register">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required> <br>
    <label for="ruolo">Ruolo</label>
    <select name="ruolo" id="ruolo" required>
        <option value="organizzatore">Organizzatore</option>
        <option value="studente" selected>Studente</option>
    </select> <br>
    <input type="submit" value="Invio">
</form>


</body>
</html>