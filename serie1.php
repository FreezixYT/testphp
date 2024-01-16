
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
echo "<h1>Exercice_1</h1> <br>";
echo "Nathan ";
echo "Nathan ";
?>


<?php
// EXERCICE 2
echo "<h1>Exercice_2 </h1><br>";
$nombre1 = 3;
$nombre2 = 5;

echo "$nombre1 et $nombre2 <br>";
?>

<?php
// EXERCICE 3
echo "<h1>Exercice_3 </h1><br>";
$somme = $nombre1 + $nombre2;
echo "$nombre1 + $nombre2 = $somme";
?>

<?php
// EXERCICE 4
echo "<h1>Exercice_4</h1> <br>";
$fahrenheit = 230;
$celsius = 0;
$celsius = ($fahrenheit - 32) * 5/9; 

echo "$fahrenheit est egalle a $celsius °";

?>


<?php
echo "<h1>Exercice_5 </h1><br>";
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
echo "<h1>Exercice 5 TVA <br></h1>";
?>

<form action="serie1.php" method="post">
    <label>Calculateur de TVA</label>

    <label>Entrer la Taux de TVA </label>
    <input type="number" name="tva">

    <label>Entrer le prix HT</label>
    <input type="number" name="HTT">

    <input type="submit">
</form>

<?php
$HTT = $_POST['prix'];
$tva =  $_POST['tva'];



$TTC = $HTT + ($HTT * ($tva / 100));

echo "Le prix TTC à $TTC";
?>





</body>
</html>









