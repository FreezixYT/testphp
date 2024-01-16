
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Salut</title>
</head>
<body>

<?php
// EXERCICE 1
echo "Exercice_1 <br>";
echo "Nathan ";
echo "Nathan ";
?>


<?php
// EXERCICE 2
echo "Exercice_2 <br>";
$nombre1 = 3;
$nombre2 = 5;

echo "$nombre1 et $nombre2 <br>";
?>

<?php
// EXERCICE 3
echo "Exercice_3 <br>";
$somme = $nombre1 + $nombre2;
echo "$nombre1 + $nombre2 = $somme";
?>

<?php
// EXERCICE 4
echo "Exercice_4 <br>";
$fahrenheit = 230;
$celsius = 0;
$celsius = ($fahrenheit - 32) * 5/9; 

echo "$fahrenheit est egalle a $celsius °";

?>


<?php
echo "Exercice_5 <br>";
?>

<form action="serie1.php" method="post">
    <label>Temperatur en fahrenheit :</label>
    <input type="number" name="nombre1">

    <input type="submit">
</form>

<?php
$fahrenheit = $_POST['nombre1'];
$celsius = ($fahrenheit - 32) * 5/9; 
echo "La temperature est egalle à $celsius";
?>

<?php
echo "Exercice_5 TVA <br>";
?>

<form action="serie1.php" method="post">
    <label>Calculateur de TVA</label>

    <label>Entrer la Taux de TVA </label>
    <input type="number" name="tva">

    <label>Entrer le prix HT</label>
    <input type="number" name="prix">

    <input type="submit">
</form>

<?php
$prix = 0;
$tva = 0;
$TTC = 0;

echo "La temperature est egalle à $TTC";

?>





</body>
</html>









