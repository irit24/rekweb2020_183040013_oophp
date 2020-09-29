<?php

//jualan produk
//komik
//game

class Produk{
    public $judul = "Judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0;
    // public function sayHello(){
    //     return "Hello Word";
    // }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul ="Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul ="uncharted";
// $produk2->tambahProperty = "Hahahha";
// var_dump($produk2);
// $produk3 = new Produk();
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kishiimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = "30000";

// $produk4 = new Produk();
// $produk3->judul = "Uncharted";
// $produk3->penulis = "Neil Druckman";
// $produk3->penerbit = "Shony computer";
// $produk3->harga = "2500000";



// echo "Komik : ".$produk3->getLabel();
// echo"<br>";

// // echo $produk3->sayHello();
// echo "Game : ".$produk4->getLabel();
// echo"<hr>";

?>