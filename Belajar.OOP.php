<?php
// require_once A 'php'
// require_once B 'php'
// require_once C'php'
// require_once 'User.php'
Spl_autoload_register(function($className){

     require_once 'produk'.$ClassName .'php';
);
