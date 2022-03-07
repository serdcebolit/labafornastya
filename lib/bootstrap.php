<?php
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/app/constants.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/router.php';

// Если не нашёл нужную страницу, то показываем 404
\Lib\View\ViewManager::show('404');