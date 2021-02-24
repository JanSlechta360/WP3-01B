<?php
function getCarDescription(int $year):void {
    if ($year <= 1960) {
        echo "To je fakt veterán!";
    }
    elseif ($year <= 1990) {
        echo "Auto by na silnici už raději být nemělo";
    }
    elseif ($year <= 2000) {
        echo "Budete platit velkou silniční daň i povinné ručení";
    }
    elseif ($year <= 2010) {
        echo "Navštěvujte servis pravidelně";
    }
    elseif ($year <= 2021) {
        echo "Auto je způsobilé";
    }
    else {
        echo "Auto ještě nebylo vyrobeno";
    }
}

function getTax(int $engine)
 if ($engine <= 800) {
     echo "1200 Kč";
 }
 elseif ($engine <= 1250) {
     echo "1 800 Kč";
 }
 elseif ($engine <= 1500) {
    echo "2 400 Kč";
} 
elseif ($engine <= 2000) {
    echo "3 000 Kč";
} 
elseif ($engine <= 3000) {
    echo "3 600 Kč";
}
else {
    echo "4 200 Kč";
} 