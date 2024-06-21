<?php
// constantes.php

// Iniciar a sessão se ainda não foi iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Definir constantes
if (!defined('DS'))
    define('DS', '/');

if ($_SERVER['HTTP_HOST'] == '127.0.0.1') {
    if (!defined('URL'))
        define('URL', 'http://127.0.0.1/php-hotel');
    if (!defined('ASSETS'))
        define('ASSETS', 'http://127.0.0.1/php-hotel/assets');
    if (!defined('ROOT'))
        define('ROOT', 'php-hotel');
    if (!defined('DEBUG'))
        define('DEBUG', true);

    if (!defined('DBHOST'))
        define('DBHOST', 'localhost');
    if (!defined('DBUSER'))
        define('DBUSER', 'root');
    if (!defined('DBPASS'))
        define('DBPASS', '');
    if (!defined('DBNAME'))
        define('DBNAME', 'projectCake');
} else {
    if (!defined('URL'))
        define('URL', 'http://labs.lucianoandrade.me/hotel');
    if (!defined('ASSETS'))
        define('ASSETS', 'http://labs.lucianoandrade.me/hotel/assets');
    if (!defined('ROOT'))
        define('ROOT', 'hotel');
    if (!defined('DEBUG'))
        define('DEBUG', false);

    if (!defined('DBHOST'))
        define('DBHOST', 'mysql.hostinger.com.br');
    if (!defined('DBUSER'))
        define('DBUSER', 'u966508396_adm');
    if (!defined('DBPASS'))
        define('DBPASS', '8mez?X[c&bj|?n');
    if (!defined('DBNAME'))
        define('DBNAME', 'u966508396_hotel');
}
