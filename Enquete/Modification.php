<?php
$file = new SplFileObject("atp_wta.csv", "a"); 
$file->fputcsv(array($_COOKIE['_nom'],$_COOKIE['_statut'],$_COOKIE['_preferences'],$_COOKIE['moyenne'])); 
$file = null; 
?>