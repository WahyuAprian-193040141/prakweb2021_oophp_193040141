<?php

// define('NAMA', 'Wahyu Aprian');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;




// class Coba
// {
//   const NAMA = 'Wahyu Aprian';
// }

// echo Coba::NAMA;




//echo __FILE__;




// function Coba()
// {
//   return __FUNCTION__;
// }
// echo Coba();




class Coba
{
  public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
