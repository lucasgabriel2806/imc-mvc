<?php

    require_once "Models/Imc.class.php";

    class ImcController 
    {
        
        public function calcularImc() 
        {

            $msg = array("","");
			$erro = false;

            if ($_POST)
            {

                if (empty($_POST["peso"])) 
                {
                    $msg[0] = "* Preencha o peso";
					$erro = true;
                }  
                if (empty($_POST["altura"])) 
                {
                    $msg[1] = "* Preencha a altura";
					$erro = true;
                }   
                if (!$erro) 
                {
                    $classe = new Imc($_POST["peso"], $_POST["altura"]);

                    $peso = $classe->getPeso();
                    $altura = $classe->getAltura();

                    $imc = number_format($peso / ($altura * $altura), 1);

                    // $this->exibirResultado();
                }

            }

            require_once "Views/imc.php";

        }

        public function exibirResultado() 
        {

            $classe = new Imc($_POST["peso"], $_POST["altura"]);    

            $peso = $classe->getPeso();
            $altura = $classe->getAltura();

            $imc = number_format($peso / ($altura * $altura), 1);

            if ($imc <= 18) 
            {
                $classificacao = 
                "<div class='container mb-3 mt-3 text-light' style='background: #E91C1D;'>
                    <p id='classificacao'>=> O IMC é igual a 18, portanto, você está na faixa de \"Abaixo do Peso Normal\".</p>
                </div>";
            } 
            else if ($imc <= 22) 
            {
                $classificacao = 
                "<div class='container mb-3 mt-3 text-light' style='background: #B7CD26;'>
                    <p id='classificacao'>=> O IMC é igual a 22, portanto, você está na faixa de \"Peso Normal\". 
                    </p>
                </div>";
            }
            else if ($imc <= 25) 
            {
                $classificacao = 
                "<div class='container mb-3 mt-3 text-light' style='background: #F3B703;'>
                    <p id='classificacao'>=> O IMC é igual a 25, portanto, você está na faixa de \"Sobrepeso\". 
                    </p>
                </div>";
            }
            else if ($imc <= 32) 
            {
                $classificacao = 
                "<div class='container mb-3 mt-3 text-light' style='background: #F39206;'>
                    <p id='classificacao'>=> O IMC é igual a 32, portanto, você está na faixa de \"Obesidade Grau I\".</p>
                </div>";
            }
            else if ($imc <= 36) 
            {
                $classificacao = 
                "<div class='container mb-3 mt-3 text-light' style='background: #EC581D;'>
                    <p id='classificacao'>=> O IMC é igual a 36, portanto, você está na faixa de \"Obesidade Grau II\".</p>
                </div>";
            }
            else if ($imc <= 47) 
            {
                $classificacao = 
                "<div class='container mb-3 mt-3 text-light' style='background: #C6181C;'>
                    <p id='classificacao'>=> O IMC é igual a 47, portanto, você está na faixa de \"Obesidade Grau III\".</p>
                </div>";
            }

            if ($imc >= 25)
            {
                $recomendacao = "<div class='container mb-3 mt-3 bg-danger text-light'>
                    <p id='recomendacao'>=> \"Sim precisa fazer regime\"</p>
                </div>";
            }
            else if ($imc < 25)
            {
                $recomendacao = "<div class='container mb-3 mt-3 bg-success text-light'>
                    <p id='recomendacao'>=> \"Não precisa fazer regime\"</p>
                </div>";
            }

            require_once "Views/resultado.php";

        }

    }

?>