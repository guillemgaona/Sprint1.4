<?php
require_once('PokerDice.php');

$dices = [];
for($i=0; $i < 5; $i++) {
    $dices[] = new PokerDice;
}

foreach($dices as $dice) {
    $dice->throw();
    echo "Ha sortit: ". $dice->shapeName(). "<br>";
}

echo "El nombre total de tirades és de: ". PokerDice::getTotalThrows();

?>