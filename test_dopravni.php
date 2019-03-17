<?php

class DopravniProstredek
{
    protected $pocetKol;
    public function __construct($pocetKol)
    {
        $this->pocetKol = $pocetKol;
    }

    public function vratPocetKol()
    {
        return $this->pocetKol;
    }

}
class Auto extends DopravniProstredek
{
    private $barva;
    public function __construct($pocetKol, $barva)
    {
        $this->barva = $barva;
        parent::__construct($pocetKol);
    }

    //v ramci dedicnosti muzeme omezovat - funkce se diva do sebe nejdrive, az potom do predku
    //rodice muzete mit jenom jednoho

    /*public function vratPocetKol()
    {
    return $this->pocetKol;
    }*/
}

$fabia = new Auto(4,'zluta');

/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 14.03.2019
 * Time: 19:10
 */