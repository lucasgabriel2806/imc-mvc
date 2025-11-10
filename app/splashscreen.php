<?php
// splash.php
// Define o tempo para redirecionar (5 segundos)
//header("refresh:5;url=pagina_destino.php");
//header("refresh:5;url=imc.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SplashScreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FontAwesome para o ícone de carregamento -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .header {
            height: 80px;
            padding: 10px 30px;
        }

        .footer {            
            height: 60px;
            padding: 10px 30px;
        }

        .spinner {
            font-size: 3rem;
            color: #007bff;
            margin-top: 20px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="d-flex flex-column justify-content-between vh-100">

    <header class="d-flex justify-content-between align-items-center header border-bottom">
        <div>
            <img src="logo-esquerda.png" alt="Logo Esquerda (Fatec Jahu)" height="60" />
        </div>
        <div class="mx-auto">
            <img src="logo-centro.png" alt="Logo Centro (CPS)" height="60" />
        </div>
        <div>
            <img src="logo-direita.png" alt="Logo Direita (DSM)" height="60" />
        </div>
    </header>

    <main class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
        <h1 class="fw-bold mb-4">Nome do Aplicativo</h1>
        <br>        
        <i class="fas fa-spinner fa-spin spinner"></i>
        <br>
        <h3 class="fw-bold mb-4 text-center">Curso Superior de Tecnologia em<br>Desenvolvimento de Software Multiplataforma</h3>
        <br>
        <p class="text-center"><strong>Nome do Aluno</strong></p>
        <br>
        <p class="text-center">Professor: Alex Paulo Lopes Batista<br>
           Disciplina: Desenvolvimento Web II (DW2).
        </p>
    </main>
    <footer class="footer text-center">
        <p>&copy; Todos os direitos reservados. 
            Faculdade de Tecnologia de Jahu, 2025.
        </p>
    </footer>
</body>

</html>