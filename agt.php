<?php
require_once 'del.php';

$orang = new orang ('della', 'bandung', 'XI-RPL','ada');

echo "nama = ".$orang->get_nama()."<br>";
echo "tempat = ".$orang->get_tempat()."<br>";
echo "kelas = ".$orang->get_kelas()."<br>";
echo "status =".$orang->get_status()."<br>";
?>