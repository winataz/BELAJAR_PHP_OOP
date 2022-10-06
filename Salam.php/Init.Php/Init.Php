<?php
require_Once 'produk/User.php';
require_Once 'produk/Salam.php';
require_Once 'produk/User.php';
Spl_autoload_register(function($classname){
    // output : ini dari class user
    require_once _DIR_ . '/produk/' .$classname.'php';
    $extends = 'php';

});


$classname = end($classname);