<?php

$persoon["voornaam"]   = "Willem ";
$persoon["achternaam"] = "Alexander van Oranje ";
$persoon["opleiding"]  = " Software Ontwikkeling ";
$persoon["leeftijd"]   = ' 53 jaar ';

echo $persoon["voornaam"];
echo $persoon["achternaam"];
echo $persoon["opleiding"];
echo $persoon["leeftijd"];

echo $persoon["voornaam"].' ' .$persoon["achternaam"]. 'is' .$persoon["leeftijd"]. 'oud en is student aan het ROC van Amsterdam aan de opleiding' .$persoon["opleiding"];

?>