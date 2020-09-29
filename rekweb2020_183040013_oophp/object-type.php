<?php

//jualan produk
//komik
//game

class Produk{
    public $judul = "Judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0;


    //Metode yang dilakukan secara otomatis setiap melakukan instansiasi kelas
    public function __construct($judul,$penulis,$penerbit,$harga){

        $this->judul = $judul;    
        $this->penulis = $penulis;    
        $this->penerbit = $penerbit;    
        $this->harga = $harga;    
        
            }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    
}
}
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga})";
        return $str;
    }
}
$produk1 = new Produk("Naruto","Masashi Kishiimoto","Shonen Jump","30000");


$produk2 = new Produk("Uncharted","Neil Druckman","Shony computer","2500000");




echo "Komik : ".$produk1->getLabel();
echo"<br>";

// echo $produk3->sayHello();
echo "Game : ".$produk2->getLabel();
echo"<hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>