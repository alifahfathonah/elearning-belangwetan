<?php
require ( __DIR__ . '/init.php');
mysql_query("DELETE from woroworo WHERE id_woro='$_GET[id]'");
header('location: ./dashboard');
?>