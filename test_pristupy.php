<?php

class Automobil
{
    private $posledniAktualizace;
    public $barva;
    public function nastavBarvu($barva)
    {
        $this->barva = 'zelená';
        $this->aktualizovano();
    }
    private function aktualizovano()
    {
    $this->posledniAktualizace = date(time());
    }
}

$auto = new Automobil;
$auto->barva = 'oranzova';
// $auto->posledniAktualizace = 'dneska'; - vypise chybu, protoze je to private

//$auto->aktualizovano(); - chyba, pokus o volani privatni metody

$auto->nastavBarvu('zluta');

var_dump($auto);

//obecne plati, ze 1 kod se musi vejit na 1 obrazovku

//refaktoring- ukrajovat kousky kodu

/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 14.03.2019
 * Time: 18:59
 */