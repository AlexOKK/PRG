<?php

function czyLiczbaPierwsza($liczba) {
    if ($liczba <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i == 0) {
            return false;
        }
    }

    return true;
}

function liczbyPierwsze($poczatek, $koniec) {
    for ($liczba = $poczatek; $liczba <= $koniec; $liczba++) {
        if (czyLiczbaPierwsza($liczba)) {
            echo $liczba . " ";
        }
    }
}


liczbyPierwsze(1, 100);

?>