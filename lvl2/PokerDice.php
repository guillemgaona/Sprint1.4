<?php
class PokerDice {
    private static $faces = ["As", "K", "Q", "J", "8", "7"];
    private $currentFace;
    private static $totalThrows = 0;


    public function throw(): void {
       $randomIndex = array_rand(self::$faces);
       $this->currentFace = self::$faces[$randomIndex];
       self::$totalThrows++;

    }

    public function shapeName(): string {
       return $this->currentFace;
    }

    public static function getTotalThrows(): int {
        return self:: $totalThrows;
    }
}
?>