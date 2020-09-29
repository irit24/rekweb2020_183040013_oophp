<?php

//jualan produk
//komik
//game

abstract class Produk{
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
abstract function getInfoProduk();

public function getInfo(){
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
        $str = "Komik : ". $this->getInfo() . "-{$this->jmlHalaman}Halaman.";
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
        $str = "Game  : ". $this->getInfo() . "-{$this->waktuMain}Jam.";
return $str;
    }

    
}
class CetakInfoProduk{
    public $daftarProduk =[];
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] =$produk;
    }
    public function cetak(){
        $str = "Daftar Produk : <br>";
        foreach ($this->daftarProduk as $p){
            $str .= "-{$p->getInfoProduk()} <br>";
        
        }
        return $str;
    }
}
$produk1 = new Komik("Naruto","Masashi Kishiimoto","Shonen Jump",30000,100);


$produk2 = new Game("Uncharted","Neil Druckman","Shony computer",2500000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk ->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


?>