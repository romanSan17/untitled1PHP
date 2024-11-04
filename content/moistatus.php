<?php
echo "Mõistatus. Euroopa riik";
// 6 подсказок, вывод списком <ol> / <ul>
$riik='Kreeka';
$varv='blue white';
echo "<ol>";
echo "<li>Esimene täht riigis on ".substr($riik,0,1)."</li>";
echo "</ol>";
echo "<ol>";
echo "<li>lipu värvid - ".str_word_count($varv)."</li>";
echo "</ol>";
echo "<ol>";
echo "<li>Teksti pikkus - ".strlen($riik)."</li>";
echo "</ol>";
