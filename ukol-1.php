<?php

class Ctverec
{
    public $delkaStrany;

    public function __construct($delkaStrany)
{
$this->delkaStrany = $delkaStrany;
}
public function spocitejObsah()
{
    return $this->delkaStrany * $this->delkaStrany;
}
}

$objektctverce = new Ctverec(6);

echo"Obsah ctverce o delce strany $delkaStrany je $objektctverce";

/**
 * Created by PhpStorm.
 * User: zhakupovaa
 * Date: 14.03.2019
 * Time: 18:35
 */