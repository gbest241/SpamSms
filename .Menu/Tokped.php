<?php
include '.Stok/func.php';

/*
    https://github.com/nee48/BomTelpSmsTokped
    Made by Handika Pratama
*/

$init = new Bom();

//Eksekusi Call/Sms Boomber (Limit 3x/Jam)

echo " [>] Masukkan No Target [<]\n [+] Input : ";
$a = trim(fgets(STDIN));
echo "\n [1] Sms\n [2] Call\n\e[91m[><]\e[0m Pilih Type:\e[93m ";
$a = trim(fgets(STDIN));
$init->no = "$a";
$init->type = 2; //Type 2 untuk telpon, Type 1 untuk sms
//$init->no = "0895371761108"; //Nomer Hp tujuan

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
