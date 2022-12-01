<?php

/**
 * @autores Artur Guia, Nuno Cruz, Nuno Carvalhido, Válter Rocha
 * @copyright 2020
 * @ver 1.0
 */



error_reporting(E_ALL);
ini_set('display_errors', true);

require __DIR__ . '/autoload.php';

@session_start();

try {

	include __DIR__ . '/routes/routes.php';

} catch(\Exception $e){
	echo $e->getMessage();
}
