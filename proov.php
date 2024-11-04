<?php
echo "Tere hommikust!";
echo "<br>";
$muutuja='PHP on skriptikeel';
echo "<strong>";
echo $muutuja;
echo "</strong>";
echo "<br>";
echo "<h2>Tekstifunktsioonid</h2>";
$tekst='Esmaspäev on 4.november';
echo $tekst;
//kõik tähed on suured
echo "<br>";
echo mb_strtoupper($tekst);
//kõik tähed on väiksed
echo "<br>";
echo strtolower($tekst);
//iga sõna algab suure tähega
echo ucwords($tekst);
echo "<br>";
//teksti pikkus
echo "Teksti pikkus - ".strlen($tekst);
echo "<br>";
//eraldame esimesed 5 tähte
echo "Esimesed 5 tähte -".substr($tekst,0,5);
echo "<br>";
//leiame on positsiooni
$otsing='on';
echo "On asukoht lauses on".strpos($tekst,$otsing);
//eralda esimene sõna kuni $otsing
echo substr($tekst,0,strpos($tekst,$otsing));
echo "<br>";
//eralda peale esimest sõna, alates 'on'
echo substr($tekst,strpos($tekst,$otsing));
echo "<br>";
echo "<h2>Kasutame veebis kasutavaid näidised</h2>";
// sõnade arv lauses
echo "sõnade arv lauses - ".str_word_count($tekst);
// teksti kärpimine
echo "<br>";
echo "<pre>$tekst</pre>";
echo "<pre>".trim($tekst)."</pre>";
echo "<pre>".ltrim($tekst)."</pre>";
echo "<pre>".rtrim($tekst)."</pre>";

$tekst2='Põhitotus võetakse ära 11.11 kui võlgnevused ei ole parandatude';
echo ltrim($tekst2);
//echo trim($tekst2, 'P, t..k');

//iseseisvalt - tekst kui massiiv
echo "<br>";
$massivitekst='Taiendav info opilase kohta';
echo "1.täht - ".$massivitekst[0];
echo "br";
//kolmas sõna
$sona=str_word_count($massivitekst, 1);
print_r($sona);
echo $sona[2];