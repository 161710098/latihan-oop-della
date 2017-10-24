<?php

require_once 'penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(21,3);
echo "perhitungan bilangan 21 dengan 3"."<br>";
echo "<br>";
echo "penjumlahan dari bilangan 21 dan 3 adalah ".$penjumlahan->get_penjumlahan()."<br>";
echo "pengurangan dari bilangan 21 dan 3 adalah ".$penjumlahan->get_pengurangan()."<br>";
echo "perkalian dari bilangan 21 dan 3 adalah ".$penjumlahan->get_perkalian()."<br>";
echo "pembagian dari bilangan 21 dan 3 adalah ".$penjumlahan->get_pembagian()."<br>";



?>