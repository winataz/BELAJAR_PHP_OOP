<?php

class fungsi
{
   //membuat construct
   public function _construct(public $name,public $numb) {}

   public function title():void
   {
      echo"belajar fungsi";
   }

   public function getparameter ($testparameter) (
      echo $testparameter;
   }

    public function getName(){
      return $this ->name;
    }

    // membuat function dengan parameter dan mengembalikan nilai
    public function perkalian()

   }
   $obj = new fungsi ("name: name fungsi,numb: 22")  
    echo $obj ->name;
    echo $obj ->numb;
    echo $obj ->title();
    echo $obj ->getName();("getparameter : decker");
    echo $obj ->perkalian ("5",6")
