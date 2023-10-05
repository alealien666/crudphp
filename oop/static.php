<?php
class Statis
{
    public static $angka = 1;

    public static function cek()
    {
        //jadi jika menggunakan public static itu harus mnggunakan self dan pemanggilan propertynya itu harus menggunakan $ bukan this lagi terus di methodnya juga harus ada static nya
        return "Halo " . self::$angka++ . " kali";
    }

    //ini method untuk instansiasi biasa
    public function ore()
    {
        return "Halo" . $this->angka++ . "kali";
    }

}
// instansiasi biasa
// $tes = new Statis();
// echo $tes->cek();

// // instansiasi static 
// echo Statis::$angka;
// echo "<br>";
// echo Statis::cek();
// echo Statis::cek();

//ore akan memberikan contoh instansiasi biasa bukan yang bawaan static.
//ini contoh yang gk pakai static ini jika di tampilkan bilangan nya itu akan reset pada objek ke 2 nya
// $tes1 = new Statis();
// echo $tes1->ore() . "<br>";
// echo $tes1->ore() . "<br>";
// echo $tes1->ore() . "<br>";
// echo "<hr>";
// $tes2 = new Statis();
// echo $tes2->ore() . "<br>";
// echo $tes2->ore() . "<br>";
// echo $tes2->ore() . "<br>";

// contoh yang menggunakan static tidak akan reset meskipun di objek yang ke 2 dia akan terus nambahkan di ++
$tes1 = new Statis();
echo $tes1->cek() . "<br>";
echo $tes1->cek() . "<br>";
echo $tes1->cek() . "<br>";
echo "<hr>";
$tes2 = new Statis();
echo $tes2->cek() . "<br>";
echo $tes2->cek() . "<br>";
echo $tes2->cek() . "<br>";

?>

<!-- jika menggunakan static itu instansiasinya bisa langsung panggil class nya-->
<!-- terus enaknya static itu jika itung itungan kek contoh ini itu ketika membuat objek baru maka
    bilangannya itu gk reset contoh di bawah instansiasi static
-->