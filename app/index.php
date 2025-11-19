<?php

    if ($_POST) 
    {

        require_once "Controllers/ImcController.class.php";
        $controller = new ImcController();
        $controller->exibirResultado();

    }
    else if ($_GET)
    {

        $controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		require_once "Controllers/$controle.class.php";
		$obj = new $controle();
		$obj->$metodo();


        // Rota para calcular imc
        // require_once "Controllers/ImcController.class.php";
        // $controller = new ImcController();
        // $controller->calcularImc();

    } else 
    {
        // rota inicial (splash screen)
        require_once "Controllers/inicioController.class.php";
        $controller = new inicioController();
        $controller->inicio();
    }

?>