<?php

class GeometrickyUtvar
{
    private $pocetStran;

    public function __construct($pocetStran)
    {
        $this->pocetStran = $pocetStran;
    }

    public function ziskejPocetStran()
    {
        return $this->pocetStran;
    }

}
class Ctverec extends GeometrickyUtvar
{
    private $delkaStrany;

    public function __construct($delkaStrany)
    {
        $this->delkaStrany = $delkaStrany;
        parent::__construct(4);
    }

    public function ziskejObvod()
    {
        return $this->ziskejObvod();
    }
}
class Trojuhelnik extends GeometrickyUtvar

{
    private $stranaA;
    private $stranaB;
    private $stranaC;

    public function __construct($pocetStran)
    {
        parent::__construct($pocetStran);
    }

}





/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 14.03.2019
 * Time: 19:20
 */