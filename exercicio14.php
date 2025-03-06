<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio012</title>
</head>
<body>
<?php include('funcoes.php') ?>
    <h1>Para saber quanto o funcionário ia receber por suas comissões com seu salario, preencha os campos:</h1>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Digite o salário fixo do funcionário: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salario" placeholder="Salario Fixo">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Digite o valor das vendas que o funcionário fez: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="vendas" placeholder="Vendas">
        </div>
     

    <br><br>
    <button type="submit" class="btn btn-primary">Calcular
        <?php
            if(isset($_POST['salario']) && isset($_POST['vendas'])){
                $salario = $_POST['salario'];
                $vendas = $_POST['vendas'];

            }
        ?>
    </button>
    <br><br>
    </form>  
  
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php

                echo exercicio14($salario, $vendas);
        
            ?>
        </textarea>
    </div>
    
    <button class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    
</body>
</html>