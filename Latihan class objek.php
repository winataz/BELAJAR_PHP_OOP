<?php

class user;

}

//membuat class user
// memiliki 3 attrribute/data member/properties
// nama,umur,kelas
public $nama,$umur,$kelas;
public $nama;
public $kelas;


}

//inisialisasi class objek
//memberikan nilai setiap attributenya
//tampilkan semua attribute yang di miliki
$user=new user();
$user-> nama="Arief";
$user->kelas="Xll RPL";

echo "Nama;",$user->nama.'<br>';
echo "umur:",$user->umur.<br>';
echo "kelas:"$user-> kelas.'<br>';