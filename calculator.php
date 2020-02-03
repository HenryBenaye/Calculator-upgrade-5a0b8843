<?php
$eersteGetal = 0;
$tweedeGetal = 0;
echo("Welke operatie wil je uitvoeren?(+,-,%)").PHP_EOL;
$keuze = readline("");
if($keuze === "+"){
    $antwoord = 0;
   echo("Eerste getal").PHP_EOL;
    $eersteGetal = readline("");
    if(is_numeric($eersteGetal)){
    echo("Tweede getal").PHP_EOL;}
    else{
        echo("Het eerste getal is geen cijfer!!!!");
    }
    $tweedeGetal = readline("");
    if(is_numeric($tweedeGetal)){
            $antwoord = $eersteGetal + $tweedeGetal;
    echo("Uw antwoord:$antwoord");
    }
}
elseif ($keuze === "-") {
    echo("Eerste getal").PHP_EOL;
    $eersteGetal = readline("");
    if(is_numeric($eersteGetal)){
    echo("Tweede getal").PHP_EOL;}
    else{
        echo("Het eerste getal is geen cijfer!!!!");
    }
    $tweedeGetal = readline("");
    if(is_numeric($tweedeGetal)){
           $antwoord = $eersteGetal - $tweedeGetal;
    echo("Uw antwoord:$antwoord");}
    }
elseif ($keuze === "%") {
    echo("Eerste getal").PHP_EOL;
    $eersteGetal = readline("");
    if(is_numeric($eersteGetal)){
        echo("Tweede getal").PHP_EOL;}
    else {
        echo("Het eerste getal is geen cijfer!!!!");
    }

    $tweedeGetal = readline("");
    if(is_numeric($tweedeGetal)){
            $antwoord = $eersteGetal % $tweedeGetal;
    echo("Uw antwoord:$antwoord");
    }
    else{
        echo("Het tweede getal is geen cijfer!!!!");
    }

    

}
else{
    echo("$antwoord is geen geldige operator!!");
}
