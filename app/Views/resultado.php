<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resultados Finais</title>
</head>

<body>
    <h1 class="text-center">
        Resultados Finais:
    </h1>
    <div class="d-flex justify-content-center">
        <div class="container mb-3 mt-3">
            <label for="valor_altura" class="form-label">Altura: <?= $altura ?></label>
            <br>
            <label for="valor_peso" class="form-label">Peso: <?= $peso; ?></label>
            <br>            
            <label for="valor_imc" class="form-label">IMC: <?= $imc; ?></label>
            <caption>
                <legend class="text-left">Tabela de Classificação do IMC</legend>
            </caption>
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                        <th>Classificação</th>
                        <th>IMC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Abaixo do Peso Normal</td>
                        <td>Abaixo de 19</td>
                    </tr>
                    <tr>
                        <td>Peso Normal</td>
                        <td>19,1 - 24,9</td>
                    </tr>
                    <tr>
                        <td>Sobrepeso</td>
                        <td>25 - 25,9</td>
                    </tr>
                    <tr>
                        <td>Obesidade Grau I</td>
                        <td>30 - 34,9</td>
                    </tr>
                    <tr>
                        <td>Obesidade Grau II</td>
                        <td>35 - 39,9</td>
                    </tr>
                    <tr>
                        <td>Obesidade Grau III ou<br>Obesidade Mórbida </td>
                        <td>Maior ou Igual a 40</td>
                    </tr>
                </tbody>
            </table>
            <p><strong>Resultado do IMC:</strong></p>
            <?= $classificacao; ?>

            <p><strong>Recomendação:</strong></p>
            <?= $recomendacao; ?>

        </div>
    </div>
</body>

</html>