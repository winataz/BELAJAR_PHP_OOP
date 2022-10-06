<?php
// perbedaan const dengan define





//CONTANT DENGAN 1 NILAI
const CHECK_STATUS ='HADIR';

//CONTANT DENGAN NILAI ARRAY BIASA
const CHECK_NAMA_GORENGAN =[
  'TAHU ISI','BALA-BALA','RISOLES','BAKWAN',TRUE
];



// CARA MENAMPILKAN DATA CHECK_STATUS
//echo CHECK_STATUS;

// Cara menampilkan nilai constan dengan nilai array biasa
// var_dump (NAMA_GORENGAN);
foreach (CHECK_NAMA_GORENGAN as $key => $value) {
    echo $key .'<br>';
}

// define
// 1.bisa mode case insensitive
// 2.bisa mendefinisikan konstanta dalam kondisional
// 3.bisa bernilai ekspresi seperti penjunlahan,misal define('A',5+3);