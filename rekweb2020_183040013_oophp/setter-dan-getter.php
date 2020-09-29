<?php

//jualan produk
//komik
//game

class Produk{
    private $judul,
    $penulis ,
    $penerbit,
     $harga = 0,
     $diskon =0;


    //Metode yang dilakukan secara otomatis setiap melakukan instansiasi kelas
    public function __construct($judul=  "Judul",$penulis= "Penulis",$penerbit = "Penerbit",$harga){

        $this->judul = $judul;    
        $this->penulis = $penulis;    
        $this->penerbit = $penerbit;    
        $this->harga = $harga;   
 
        
            }

            public function getJudul(){
                return $this->judul;
            }
            public function setJudul($judul){
                $this -> judul = $judul;
            }
            public function getPenerbit(){
                return $this->judul;
            }
            public function setPenerbit($judul){
                $this -> judul = $judul;
            }
            public function getPenulis(){
                return $this->judul;
            }
            public function setPenulis($judul){
                $this -> judul = $judul;
            }

     public function getHarga(){
                return $this->harga-($this->harga*$this->diskon/100);
            
        }
        public function getDiskon(){
            return $this->diskon;
        }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
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
   public $jmlHalaman =0;

   public function __construct( $judul,$penulis,$penerbit,$harga,  $jmlHalaman ){
 parent::__construct( $judul,$penulis,$penerbit,$harga);

 $this ->jmlHalaman = $jmlHalaman;
   }

    public function getInfoProduk(){
        $str = "Komik : ". parent::getInfoProduk() . "-{$this->jmlHalaman}Halaman.";
return $str;
    }
}
class Game extends Produk{
    public $waktuMain;
    public function __construct( $judul,$penulis,$penerbit,$harga,  $waktuMain ){
     parent::__construct( $judul,$penulis,$penerbit,$harga);
     $this ->waktuMain = $waktuMain;

    }
    public function getInfoProduk(){
        $str = "Game  : ". parent::getInfoProduk() . "-{$this->waktuMain}Jam.";
return $str;
    }

    
}
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} {$produk->harga})";
        return $str;
    }
}
$produk1 = new Komik("Naruto","Masashi Kishiimoto","Shonen Jump",30000,100);


$produk2 = new Game("Uncharted","Neil Druckman","Shony computer",2500000,50);




echo $produk1->getInfoProduk();
echo"<br>";

echo $produk2->getInfoProduk();

echo"<br>";

echo"<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();


echo"<hr>";
$produk1->setPenulis("Ilyasa Ridho");
echo $produk1 ->getPenulis();
?>