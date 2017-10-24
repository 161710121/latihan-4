<?php
require_once 'index.php';


echo "========================"."<br>";
echo "Perhitungan bilangan 10 dengan 10"."<br>";
echo "========================"."<br>";

$a = new perhitungan;
$a->set_penjumlahan(10,10);
echo "Penjumlahan dari bilangan 10 dan 10 adalah = ".$a->get_penjumlahan()."<br/>";

$b = new perhitungan;
$b->set_pengurangan(10,10);
echo "Pengurangan dari bilangan 10 dan 10 adalah = ".$a->get_pengurangan()."<br/>";

$c = new perhitungan;
$c->set_perkalian(10,10);
echo "Perkalian dari bilangan 10 dan 10 adalah = ".$a->get_perkalian()."<br/>";

$d = new perhitungan;
$d->set_pembagian(10,10);
echo "Pembagian dari bilangan 10 dan 10 adalah = ".$a->get_pembagian()."<br/>";


?>