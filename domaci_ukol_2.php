<?php
    class Uzivatel
    {
        public $jmeno;
        public $heslo;

        public function __construct($jmeno, $heslo)
        {
            $this->jmeno = $jmeno;
            $this->heslo = $heslo;
        }

        public function overeni ($zadanejmeno, $zadaneheslo)
        {
            if ($zadanejmeno === $this->jmeno && $zadaneheslo === $this->heslo)
            {
                return true;
            }
            else return false;
        }

        public function ziskejJmeno()
        {
            return $this->jmeno;
        }
    }

    class Prihlasovani
    {
        public $prihlaseniUzivatele = [];

        public function prihlas (Uzivatel $objekt, string $jmeno1, string $heslo1)
        {
           if ($objekt-> overeni ($jmeno1, $heslo1) === true)
            {
                $this->prihlaseniUzivatele[] = $objekt->ziskejJmeno();
            }
        }

        public function zobrazPrihlaseneUzivatele()
        {
            echo 'Prihlaseni uzivatele: ';
            foreach ($prihlaseniUzivatele as $objekt)
            {

            }
        }
    }


    $objekt1 = new Uzivatel('josef','josef1234');

    $objekt2 = new Prihlasovani();

    echo $objekt2->zobrazPrihlaseneUzivatele();



