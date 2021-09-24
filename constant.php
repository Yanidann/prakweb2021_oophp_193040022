<?php

//define('NAMA', 'Yanida Nur Nabila Widya Sastra');
//echo NAMA;

//echo "<br>";

//const UMUR = 32;
//echo UMUR;


//class Coba
//{
//  const NAMA = 'Yanida';
//}

//echo Coba::NAMA;


//echo __FILE__;


//function coba()
//{
//  return __FUNCTION__;
//}

//echo Coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
