<?php

require __DIR__."./Movie.php";
echo "<h2>Lista film d'animazione</h2>";
$castelloErrante = new Movies("Castello Errante di Howl","Hayao Miyazaki",2004,"Studio Ghibli","giapponese");

echo "<ul>
<li><strong>Nome del film:</strong> {$castelloErrante->nome}</li>
<li><strong>Regista:</strong> {$castelloErrante->regista}</li>
<li><strong>Anno di uscita:</strong> {$castelloErrante->anno}</li>
<li><strong>Casa di produzione:</strong> {$castelloErrante->casaDiProduzione}</li>
<li><strong>Lingua originale:</strong> {$castelloErrante->lingua}</li>
</ul>
<hr>";

$cittaIncantanta = new Movies("La città incantata","Hayao Miyazaki",2001,"Studio Ghibli","giapponese");
echo "<ul>
<li><strong>Nome del film:</strong> {$cittaIncantanta->nome}</li>
<li><strong>Regista:</strong> {$cittaIncantanta->regista}</li>
<li><strong>Anno di uscita:</strong> {$cittaIncantanta->anno}</li>
<li><strong>Casa di produzione:</strong> {$cittaIncantanta->casaDiProduzione}</li>
<li><strong>Lingua originale:</strong> {$cittaIncantanta->lingua}</li>
</ul>
<hr>";

$bigHero =new Movies("Big Hero 6"," Chris Williams", 2014,"Walt Disney Animation Studios","inglese");
echo "<ul>
<li><strong>Nome del film:</strong> {$bigHero->nome}</li>
<li><strong>Regista:</strong> {$bigHero->regista}</li>
<li><strong>Anno di uscita:</strong> {$bigHero->anno}</li>
<li><strong>Casa di produzione:</strong> {$bigHero->casaDiProduzione}</li>
<li><strong>Lingua originale:</strong> {$bigHero->lingua}</li>
</ul>
<hr>";

$coraline = new Movies("Coraline e la porta magica","Henry Selick",2009,"DreamWorks Pictures","inglese");
echo "<ul>
<li><strong>Nome del film:</strong> {$coraline->nome}</li>
<li><strong>Regista:</strong> {$coraline->regista}</li>
<li><strong>Anno di uscita:</strong> {$coraline->anno}</li>
<li><strong>Casa di produzione:</strong> {$coraline->casaDiProduzione}</li>
<li><strong>Lingua originale:</strong> {$coraline->lingua}</li>
</ul>
<hr>";