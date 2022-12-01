<?php

use src\Route as Route;

Route::get('/x', function(){  require _CAMINHO_TEMPLATE. "index.html";});
Route::get('/top', function(){  require _CAMINHO_TEMPLATE2. "index.php";});
Route::get('/filtrado', function(){  require _CAMINHO_TEMPLATE2. "index.php";});
Route::get('/playlist', function(){  require _CAMINHO_TEMPLATE2. "index.php";});
//Route::get('/', function(){
//	echo "inicphp
//});

Route::get('/fim', function(){
	echo "Página final";
});

//Documentacao
Route::get('/manutencao/documentacao', function(){  require _CAMINHO_MANUTENCAO. "documentacao.html";});  
Route::get(['set' => '/manutencao/documentacao/ver', 'as' => 'documentation.verDocumentacao'], 'ControllerDocumentation@verDocumentacao');

Route::get('/manutencao/guia', function(){  require _CAMINHO_ADMIN. "gerirGuia.php";});                     //Gerir a tabela Guia
Route::post('/manutencao/guia', function(){  require _CAMINHO_ADMIN. "gerirGuia.php";});


//utilizadores
Route::get(['set' => '/utilizadores/numero', 'as' => 'user.contarUsers'], 'ControllerUser@contarUsers');  
Route::post(['set' => '/utilizadores/addUser', 'as' => 'user.addUser'], 'ControllerUser@addUser');  

// errors

Route::get('/404', function(){  require _CAMINHO_TEMPLATE2. "403.php";});
Route::get('/403', function(){  require _CAMINHO_TEMPLATE2. "403.php";});
?>
