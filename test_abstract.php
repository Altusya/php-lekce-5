<?php

abstract class DopravniProstredek
{
    protected $pocetKol;
    public function __construct($pocetKol)
    {
        $this->pocetKol = $pocetKol;
    }
    abstract public function jed();
}
final class Auto extends DopravniProstredek
{
    private $barva;
    public function __construct($pocetKol, $barva)
    {
        $this->barva = $barva;
        parent::__construct($pocetKol);
    }
}
new DopravniProstredek(4); // končí chybou
class HybridniAuto extends Auto
{
// končí chybou
}


/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 14.03.2019
 * Time: 20:17
 */