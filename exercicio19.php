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
    <h1>Digite 10 números para calcular a soma de todos (considere que os numeros tem que ser menores de 40) !:</h1>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primeiro número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num1" placeholder="1-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segundo número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num2" placeholder="2-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Terceiro número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num3" placeholder="3-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quarto número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num4" placeholder="4-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quinto número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num5" placeholder="5-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sexto número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num6" placeholder="6-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sétimo número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num7" placeholder="7-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Oitavo número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num8" placeholder="8-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nono número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num9" placeholder="9-Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num10" placeholder="10-Número">
        </div>
     

    <br><br>
    <button type="submit" class="btn btn-primary">Calcular
        <?php
            if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5']) && isset($_POST['num6']) && isset($_POST['num7']) && isset($_POST['num8']) && isset($_POST['num9']) && isset($_POST['num10'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
                $num6 = $_POST['num6'];
                $num7 = $_POST['num7'];
                $num8 = $_POST['num8'];
                $num9 = $_POST['num9'];
                $num10 = $_POST['num10'];

            }
        ?>
    </button>
    <br><br>
    </form>  
  
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php

                echo exercicio19($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);
        
            ?>
        </textarea>
    </div>
    
    <button class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    
</body>
</html>