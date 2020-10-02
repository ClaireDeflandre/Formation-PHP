<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Impôts</title>
</head>

<body>
<form action="resultatImpot.php" method="get"></form>
<label for="name">Formulaire Impôts</label>

<br><br>
<p>Nom</p><input type="text" id="name" name="name" required></input>
<br><br>
<p>Revenu</p><input type="int" id="revenu" name="revenu" required></input>
<br><br>
<button type="submit" name="calcul">OK</button>

</form>
</body>
</html>