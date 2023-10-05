<?php

 $naam = readline("Geef jouw naam : ");
 $leeftijd = readline("Geef jouw leeftijd : ");

 echo "Hallo $naam \n";

 if ( $leeftijd < 22 ) {
 echo "Jij bent jonger dan 22 jaar.\n";
 }
 if ( $leeftijd > 22 ) {
    echo "Jij bent ouder dan 22 jaar.\n";
13 }
14 if ( $leeftijd == 22 ) {
15 echo "Jij bent precies 22 jaar.\n";
}
?>