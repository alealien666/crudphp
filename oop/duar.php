<!-- extends protected -->
<!-- bedanya protected dan private itu kalau private itu hanya bisa di akses oleh class itu sendiri meskipun punya child dia gk akan bisa ngakses -->
<?php
class Pitik
{
    protected $ngen;

    public function haha($ngen)
    {
        $this->ngen = $ngen;
    }
}

class awokawok extends Pitik
{
    public function gacorKang()
    {
        return "Woy " . $this->ngen . " Kontol";
    }
}

$haha = new awokawok();
$haha->haha('Ale');
echo $haha->gacorKang();


// di php konstanta itu menggunakan define dan const 
// bedanya kalau define itu gk bisa di masukkan dalam class/oop 
define('nama', 'alealien');
echo nama;

const nama2 = 'miku';
echo nama2;
?>