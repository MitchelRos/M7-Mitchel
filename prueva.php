<!DOCTYPE html>
<html>
<body>

<?php
$nom = "Mitchel";
$cognom = "Rosado";
$edat = 23;

$fechadenacimiento = date_create("1998-03-21");
$anynaixament = date_format($fechadenacimiento,"Y-m-d");
$telefon = "654321010";
$adreca = "Calle playa,323";
$treballa = false;
$email = "mrosado19@jaumebalmes.net";
$treballaFinal = "";
if ($treballa) {
    $treballaFinal ="treballa";
} else {
    $treballaFinal ="no treballa";

}
?>


<h1>Descrivint a <?php echo $nom; ?></h1>
<h2>Les dades de <?php echo $nom; ?> són:</h2>
<ul>
    <li>Es diu: <?php echo $nom; ?> <?php echo $cognom; ?></li>
    <li>Té <?php echo $edat; ?> anys.</li>
    <li>Va neixer l'any <?php echo $anynaixament; ?></li>
    <li>Viu a <?php echo $adreca; ?></li>
    <li>El seu email es <?php echo $email; ?></li>
    <li>I actualment <?php echo $treballaFinal; ?></li>
</ul>
</body>
</html>
