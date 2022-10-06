<?php
trait Role{
   abstract public function getRole():String;
}

  class babeh{

     public $nama;
     public $umur;
     public $marga;
     public static $index;
     public $is_status;

     public function__construct($nama,$umur,$is_status = "bapak")
     {
      $this -> nama =$nama;
      $this -> umur =$umur;
      $this -> marga='tan';
      self::$index =1;
      $this->is_status =$is_status;
     }

     public function getmarga(){
      return $this -> marga;
     }

     public function getName()

     {
      return $this ->name;
     }

     public function getumur();
     
