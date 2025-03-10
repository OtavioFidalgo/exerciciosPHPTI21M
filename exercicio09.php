<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio09</title>
</head>
<body>
<?php include('funcoes.php') ?>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Valor de Fabrica: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="fabrica" placeholder="valor Fabrica">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Porcentagem da Distribuidora: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="distribuidora" placeholder="porcentagem Distribuidora">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Impostos: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="impostos" placeholder="impostos">
        </div>
     

    <br><br>
    <button type="submit" class="btn btn-primary">Calcular
        <?php
            if(isset($_POST['fabrica']) && isset($_POST['distribuidora']) && isset($_POST['impostos'])){
                $fabrica = $_POST['fabrica'];
                $distribuidora = $_POST['distribuidora'];
                $impostos = $_POST['impostos'];


            }
        ?>
    </button>
    <br><br>
    </form>  
  
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php

                echo exercicio09($fabrica, $distribuidora, $impostos);
        
            ?>
        </textarea>
    </div>
    
    <button class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    
</body>
</html>