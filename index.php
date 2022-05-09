<?php 
include_once __DIR__ . "/classes/Products.php";
include_once __DIR__ . "/classes/food.php";
include_once __DIR__ . "/classes/toy.php";
include_once __DIR__ . "/classes/utente.php";
include_once __DIR__ . "/classes/creditCard.php";

//Prodotti
$croccantini = new Food("cacao", "senza conservanti", "croccantini", 20, 5);
var_dump($croccantini);

$palla = new Toy("x-ball", "rosso", "palla", 1, 10);
var_dump($palla);

//Utenti
$Marco = new Utente("Marco","SI");
var_dump($Marco);

$Giorgio = new Utente("Giorgio", "NO");
var_dump($Giorgio);

//Carte
$MasterCard = new creditCard("Master Card", "10/05/2020");
var_dump($MasterCard);

$Visa = new creditCard("Visa", "04/02/2025");
var_dump($Visa);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>
<body>

    <div style="text-align: center; color: green; margin-top: 50px"">
        <h3> Sconto Riservato a utenti registrati: 20% </h3>
    </div>

<div style="text-align: center; margin-top: 50px">
    <h1>  Utente: <span style="color: red;"><?php echo $Marco->getNome() ?></span></h1>
    <pre style="color: red"> UTENTE REGISTRATO: <span style="color: green"><?php echo $Marco->getRegistrato() ?></span></pre>
    <pre style="color: red; display: inline"> Metodo Di Pagamento:</pre> <span><?php echo $MasterCard->getNomeCarta() ?></span> / <span style="color: red"> Scadenza: </span> <pre style="display:inline;"><?php echo $MasterCard->getDate() ?></pre>
    <pre style="color: red"> Prodotto Acquistato: <span style="color: black"><?php echo $croccantini->getNome() ?></span> </pre>  <span> <pre style="color: red"> Quantità acquistata: <span style="color: black;"><?php echo $croccantini->getQuantita() ?>pz</span></pre>
    <pre style="color: red"> Gusto: <span style="color: black"><?php echo $croccantini->getGusto() ?></span> </pre> <pre style="color:red">Tipologia: <span style="color: black;"><?php echo $croccantini->getTipologia()?>.</span></pre>
    <pre style="color: red"> Prezzo Articolo: <span style="color: black"><?php echo $croccantini->Prezzo()?>€</span></pre>
    <pre style="color: red"> Prezzo Totale Finale: <span style="color: black"><?php echo $croccantini->getPrezzo(true) ?>€ </span></pre>
    <pre style="color: red"> Controllo Metodo Di Pagamento Valido: <span style="color: black"><?php echo $MasterCard->controlloCarta(false) ?></span></pre>
</div>

<div style="text-align: center; margin-top: 50px">
    <h1>  Utente: <span style="color: red;"><?php echo $Giorgio->getNome() ?></span></h1>
    <pre style="color: red"> UTENTE REGISTRATO: <span style="color: green"><?php echo $Giorgio->getRegistrato() ?></span></pre>
    <pre style="color: red; display: inline"> Metodo Di Pagamento:</pre> <span><?php echo $Visa->getNomeCarta() ?></span> / <span style="color: red"> Scadenza: </span> <pre style="display:inline;"><?php echo $Visa->getDate() ?></pre>
    <pre style="color: red"> Prodotto Acquistato: <span style="color: black"><?php echo $palla->getNome() ?></span> </pre>  <span> <pre style="color: red"> Quantità acquistata: <span style="color: black;"><?php echo $palla->getQuantita() ?>pz</span></pre>
    <pre style="color: red"> Modello: <span style="color: black"><?php echo $palla->getModello() ?></span> </pre>
    <pre style="color: red"> Colore Articolo: <span style="color: black"><?php echo $palla->getColore() ?></span> </pre>
    <pre style="color: red"> Prezzo Articolo: <span style="color: black"><?php echo $palla->Prezzo()?>€</span></pre>
    <pre style="color: red"> Prezzo Totale Finale: <span style="color: black"><?php echo $palla->getPrezzo(false) ?>€ </span></pre>
    <pre style="color: red"> Controllo Metodo Di Pagamento Valido: <span style="color: black"><?php echo $Visa->controlloCarta(true) ?></span></pre>
</div>






</body>
</html>