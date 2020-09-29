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
    $waktuMain = 0;


    //Metode yang dilakukan secara otomatis setiap melakukan instansiasi kelas
    public function __construct($judul,$penulis,$penerbit,$harga,$jmlHalaman,$waktuMain){

        $this->judul = $judul;    
        $this->penulis = $penulis;    
        $this->penerbit = $penerbit;    
        $this->harga = $harga;   
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        
            }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    
}
public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()}(RP.{$this->harga}) ";
 
    return $str;
}
}
class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik:{$this->judul} | {$this->getLabel()}(RP.{$this->harga}) -{$this->jmlHalaman}Halaman.";
return $str;
    }
}
class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game:{$this->judul} | {$this->getLabel()}(RP.{$this->harga}) -{$this->waktuMain}Jam.";
return $str;
    }
}
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga})";
        return $str;
    }
}
$produk1 = new Komik("Naruto","Masashi Kishiimoto","Shonen Jump",30000,100,0);


$produk2 = new Game("Uncharted","Neil Druckman","Shony computer",2500000,0,50);




echo "Komik : ".$produk1->getLabel();
echo"<br>";

// echo $produk3->sayHello();
echo "Game : ".$produk2->getLabel();
echo"<hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo"<br>";

echo"<hr>";

echo $produk1->getInfoProduk();
echo"<br>";

echo $produk2->getInfoProduk();


?>