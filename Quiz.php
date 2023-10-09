<?PHp
$random = rand(1,100);
$guesses = 0;
$guess = 0;

while ($guess != $random) {
    $guess = readline("Raad het getal tussen 1 en 100: ");
    $guesses++;

    if ($guess < 1 || $guess > 100) {
        echo "Het ingevoerde getal moet tussen 1 en 100 liggen.\n";
    } elseif ($guess == $random) {
        echo "Je hebt het juiste getal geraden in $guesses beurten!\n";
    } elseif ($guess < $random) {
        echo "Het geraden getal is te laag.\n";
    } else {
        echo "Het geraden getal is te hoog.\n";
    }
}
