<?php
class Ngen
{
    public $judul, $pengarang, $penerbit, $harga, $halaman, $jam;


    public function __construct($judul, $pengarang, $penerbit, $harga)
    {
        // catatan: nama di method ini beda loo ya sama yang property. ini di bawah itu deklarasi bahwasannya nama method ini itu = $nama yang di property jadi yang this->nama itu milik property nya ya jangan kebalik
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        // $this->halaman = $halaman;
        // $this->jam = $jam;
    }

    public function gacorKang()
    {
        $storing = "{$this->judul}, {$this->pengarang}, {$this->penerbit}, {$this->harga}";
        return $storing;
    }
}


// ini fungsinya itu ketika ingin membuat tipe data object sendiri
// class getInfo
// {
//     public function gacorKang($gacor)
//     {
//         $storing = "{$gacor->judul} {$gacor->pengarang} {$gacor->penerbit} (Rp. {$gacor->harga})";
//         return $storing;
//     }
// }

// kan gw mau nampilin yang manga itu berapa lembar dan yang yang game itu berapa jam..
// itu pakai inheritance biar enak timbang harus menggunakan percabangan
// berhubung sembarangane iku jupuk teko parent maka harus menggunakan this ingat.. lek ng php this itu di gae khusus parent nya/ pusat
// terus itu yang halaman sama jam itu kan sekarang masih ngambil dari parent. nah kalau inheritance itu 
// biar lebih efektif itu di deklarasi di child nya aja jadi jam sama halaman di parent di hapus aja
// pakai constructor di child nya

// jadi biar gw gk harus manggil lagi satu persatu mending pakai overriding untuk memanggil method parentnya seperti di bawah
class Manga extends Ngen
{
    // ini deklarasi construc lagi itu untuk misal gw mau nambahi lagi parameter kek di bawah ini kan tak tambahi $halaman, 
    public $halaman;
    public function __construct($judul, $pengarang, $penerbit, $harga, $halaman)
    {
        //ini overiding agar gw gk manggil 1 1 kek yang halaman itu, jadi mending ngambil parent nya
        parent::__construct($judul, $pengarang, $penerbit, $harga);
        $this->halaman = $halaman;
    }
    public function gacorKang()
    {
        //di sini parent::gacorkang itu ngambil method dari parent
        $storaiku = "Manga: " . parent::gacorKang() . " - {$this->halaman} halaman";
        return $storaiku;
    }
}
class Game extends Ngen
{
    public $jam;
    //override mengambil data parent daripada deklarasi ulang. ini contohnya itu nambah $jam di parent gk ada $jam
    public function __construct($judul, $pengarang, $penerbit, $harga, $jam)
    {
        parent::__construct($judul, $pengarang, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function gacorKang()
    {
        $storaiku = "Game: " . parent::gacorKang() . " ~ {$this->jam} Jam";
        return $storaiku;
    }
}



$gacor1 = new Manga('One Piece', 'Eichiro Oda', 'Shonen Jump', 100000, 100);
$gacor2 = new Game('God Of War', 'Santa Monica', 'Sony wa akhwatuha', 750000, 9);

// $awok->nama = 'ale';
// $awok->energi = '100';

// print_r($gacor1);
echo $gacor1->gacorKang();
echo "<br>";
echo $gacor2->gacorKang();


// $tampil = new getInfo();
// echo $tampil->gacorKang($gacor1);

// di dalam kang yang ini itu object mana yang ingin di tampilkan
?>