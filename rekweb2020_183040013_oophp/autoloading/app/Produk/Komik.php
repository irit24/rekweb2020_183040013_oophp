<?php
class Komik extends Produk implements InfoProduk{
   public $jmlHalaman =0;

   public function __construct( $judul,$penulis,$penerbit,$harga,  $jmlHalaman ){
 parent::__construct( $judul,$penulis,$penerbit,$harga);

 $this ->jmlHalaman = $jmlHalaman;
   }

    public function getInfoProduk(){
        $str = "Komik : ". $this->getInfo() . "-{$this->jmlHalaman}Halaman.";
return $str;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()}(RP.{$this->harga}) ";
     
        return $str;
    }
}
?>