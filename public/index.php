<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../app/Config/app.php';
require __DIR__ . '/../app/Config/helpers.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace('/public/', '', $uri);

$controller = CONTROLLER_PADRAO; //constante definida no app.php
$metodo = METODO_PADRAO; //constante definida no app.ph

if ($uri != '') { //verifica se existe algum valor em $uri
    $uri = explode('/', $uri); //converte a var $uri em um array

    $controller = $uri[0]; //reescreve a variável $controller

    if (isset($uri[1])) { //verificar se existe a posição 1 em $uri
        $metodo = explode('?', $uri[1])[0];
    }
}

//verifica se o controller existe na pasta app/Controllers
//app/Controllers/Teste.php
if (is_file(__DIR__ . "/../app/Controllers/" . $controller . ".php")) {
    //ucfirst transforma a primeira letra em maúscula
    $controller = "Pizzaria\\Controllers\\" . ucfirst($controller);
    $controllerExec = new $controller();//cria uma instancia do controllers
    
    if(method_exists($controllerExec, $metodo)){
        $controllerExec->$metodo();//executa o método do controller
    }else{
        echo "Página não encontrada!";
    }
    
} else {
    echo "Página não encontrada!";
}