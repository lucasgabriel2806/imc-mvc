<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>IMC (Índice de Massa Corporal)</title>
</head>

<body> 
    <h1 class="text-center">
        Cálculo do IMC <br>(Índice de Massa Corporal):
    </h1>   
    <div class="d-flex justify-content-center">
    <form class="col-6" action="#" method="POST">
        <div class="mb-3 mt-3">
            <label for="peso" class="form-label">Peso:</label>
            <input type="text" class="form-control" id="peso" name="peso" placeholder="Entre com o peso.">
            <p class="text-danger"><?= $msg[0]; ?></p>
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Altura:</label>
            <input type="text" class="form-control" id="altura" name="altura" placeholder="Entre com a altura.">
            <p class="text-danger"><?= $msg[1]; ?></p>
        </div>
        <button type="submit" id="calcular" class="btn btn-primary">Calcular IMC</button>
        <button type="reset" id="limpar" class="btn btn-danger">Limpar</button>
    </form>
    </div>
</body>

</html>