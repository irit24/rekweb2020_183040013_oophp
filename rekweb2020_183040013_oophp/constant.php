<?php

//constat sebuah identifer untuk menyimpan nilai dan nilainya tidak dapat diubah
//disimpan diluar sebagai kontansta global
// define('NAMA','Ilyasa Ridho');
// echo NAMA;
// echo "<br>";
// const UMUR =20;
// echo UMUR;


// class Coba {
//     const NAMA = 'Ilyasa';
// }
// echo Coba::NAMA;

//echo__LINE__;

// function coba(){
//     return __FUNCTION__;

// }
// echo coba();

class Coba{
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
// ?>


