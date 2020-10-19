<?php
//session_save_path('./sessions');
//session_start();
require_once('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'C:/xampp/htdocs/BarcaTrain/smarty/templates';
$smarty->config_dir = 'C:/xampp/htdocs/BarcaTrain/smarty/configs';
$smarty->cache_dir = 'C:/xampp/htdocs/BarcaTrain/smarty/cache';
$smarty->compile_dir = 'C:/xampp/htdocs/BarcaTrain/smarty/templates_c';
?>