<?php
require ( __DIR__ . '/init.php');
mysql_query("DELETE from siswa WHERE nis='$_GET[id]'");
header('location: ./siswa');
?>
