<?php

//jualan produk
//komik
//game

class Produk{
    public $judul = "Judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0,
    $jmlHalaman =0,
    $waktuMain = 0,
    $tipe;


    //Metode yang dilakukan secara otomatis setiap melakukan instansiasi kelas
    public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman,$waktuMain,$tipe){

        $this->judul = $judul;    
        $this->penulis = $penulis;    
        $this->penerbit = $penerbit;    
        $this->harga = $harga;   
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
        
            }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    
}
public function getInfoLengkap(){
    $str = "{$this->tipe} :{$this->judul} | {$this->getLabel()}(RP.{$this->harga}) ";
    if ($this->tipe == "Komik"){
        $str .= "-{$this->jmlHalaman} Halaman.";
    }else if ($this->tipe == "Game" ){
        $str .= "-{$this->waktuMain} Jam.";
    }
    return $str;
}
}
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga})";
        return $str;
    }
}
$produk1 = new Produk("Naruto","Masashi Kishiimoto","Shonen Jump","30000",100,0,"Komik");


$produk2 = new Produk("Uncharted","Neil Druckman","Shony computer","2500000",0,50,"Game");




echo "Komik : ".$produk1->getLabel();
echo"<br>";

// echo $produk3->sayHello();
echo "Game : ".$produk2->getLabel();
echo"<hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo"<br>";

echo"<hr>";

echo $produk1->getInfoLengkap();
echo"<br>";

echo $produk2->getInfoLengkap();


?>