<?php

require_once 'app/init.php';


// $produk1 = new Komik("Naruto","Masashi Kishiimoto","Shonen Jump",30000,100);


// $produk2 = new Game("Uncharted","Neil Druckman","Shony computer",2500000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk ->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo"<hr>";

use app\Service\User as ServiceUser;
use app\Produk\User as ProdukUser;

new ServiceUser();
echo"<hr>";
new ProdukUser();

?>