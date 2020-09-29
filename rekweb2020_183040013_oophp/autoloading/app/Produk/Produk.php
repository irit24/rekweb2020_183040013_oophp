<?php

Abstract class Produk{
    protected $judul,
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

abstract public function getInfo();

}
?>