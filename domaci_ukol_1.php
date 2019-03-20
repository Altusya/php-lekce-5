<?php

    interface TrojrozmernyObrazec
    {
        public function ziskejObjem();

        public function ziskejPovrch();
    }

    class Kvadr implements TrojrozmernyObrazec
    {
        private $a;
        private $b;
        private $c;

        public function __construct($a,$b,$c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        public function ziskejObjem()
        {
            return $this->a * $this->b * $this->c;
        }
        public function ziskejPovrch()
        {
            return 2*($this->a * $this->b + $this->a * $this->c + $this->b * $this->c);
        }
    }

    class Krychle implements TrojrozmernyObrazec
    {
        private $a;

        public function __construct($a)
        {
            $this->a = $a;
        }

        public function ziskejObjem()
        {
            return $this->a**3;
        }

        public function ziskejPovrch()
        {
            return 6 * $this->a**2;
        }
    }

    class Koule implements TrojrozmernyObrazec
    {
        private $a;

        public function __construct($a)
        {
            $this->a = $a;
        }

        public function ziskejObjem()
        {
            return (1/3)*4*pi()*$this->a**3;
        }

        public function ziskejPovrch()
        {
            return 4*pi()*$this->a**2;
        }
    }

    class Jehlan implements TrojrozmernyObrazec
    {
        private $a;
        private $h;

        public function __construct($a, $h)
        {
            $this->a = $a;
            $this->h = $h;
        }

        public function ziskejObjem()
        {
            return (1/3)*$this->h*$this->a**2;
        }

        public function ziskejPovrch()
        {
            return 2*$this->a*sqrt($this->h**2 + $this->a**2);
        }
    }




    function vypisobjem (TrojrozmernyObrazec $objem)
        {
           echo get_class($objem) . ' ma objem ' . $objem->ziskejObjem() . '<br>';
        }
    function vypispovrh (TrojrozmernyObrazec $povrch)
        {
            echo get_class($povrch) . ' ma povrch ' . $povrch->ziskejPovrch() . '<br>';
        }

    $kvadr = new Kvadr(2,3,7);
    $krychle = new Krychle(5);
    $koule = new Koule(6);
    $jehlan = new Jehlan(3,4);

    vypisobjem($kvadr);
    vypispovrh($kvadr);
    vypisobjem($krychle);
    vypispovrh($krychle);
    vypisobjem($koule);
    vypispovrh($koule);
    vypisobjem($jehlan);
    vypispovrh($jehlan);

 ?>