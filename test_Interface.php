<?php

interface DopravniProstredek
{
    public function spocitejKapacitu($pocetPsu);
}

interface UmiTroubit {

    public function zatrub();
}

class TroubiciMechanismus {
    public function zprocesujTroubeni(UmiTroubit $vec) {
        $vec->zatrub();
    }
}
class Auto implements DopravniProstredek, UmiTroubit
{
    public $pocetSedadel;

    public function spocitejKapacitu($pocetPsu)
    {
        return $this->pocetSedadel;
    }
    public function zatrub()
    {
        // TODO: Implement zatrub() method.
    }
}


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 14.03.2019
 * Time: 20:27
 */