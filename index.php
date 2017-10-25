<?php

function leeftijdCheck($ltijd) {

    if($ltijd < 16) {

        return "${ltijd} jaar is te jong voor deze film.";

    } else if ($ltijd >= 16 && $ltijd <18) {

        return "${ltijd} jaar, je hebt ouderlijk toezicht nodig.";

    } else {

        return "Je bent al ${ltijd} jaar. Geniet van de film";

    }
}

for ($i = 1; $i <= 20; $i++) {
    echo leeftijdCheck($i) . PHP_EOL;
}