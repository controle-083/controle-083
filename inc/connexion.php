<?php
 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND]= 'SET NAMES utf8';
 $conn = new PDO('mysql:host=sql210.epizy.com;dbname=epiz_22177148_cnam_nfa083recette4','epiz_22177148', 'Mdpcontrole083', $pdo_options);
 return $conn;
?>