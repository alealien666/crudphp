<?php
interface kotak
{
    public function luasPersegi();
}

class Persegi implements kotak
{
    public $sisi;
    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function luasPersegi()
    {
        return $this->sisi * $this->sisi;
    }
}

$kotak = new Persegi(100);
echo "Luas Persegi: " . $kotak->luasPersegi();
?>