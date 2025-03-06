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
    <h1>Digite as Notas da turma para saber a média total da sala !</h1>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 1: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num1" placeholder="Nota1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 2: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num2" placeholder="Nota2">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 3: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num3" placeholder="Nota3">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 4: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num4" placeholder="Nota4">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 5: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num5" placeholder="Nota5">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 6: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num6" placeholder="Nota6">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 7: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num7" placeholder="Nota7">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 8: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num8" placeholder="Nota8">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 9: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num9" placeholder="Nota9">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 10: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num10" placeholder="Nota10">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 11: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num11" placeholder="Nota11">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 12: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num12" placeholder="Nota12">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 13: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num13" placeholder="Nota13">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 14: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num14" placeholder="Nota14">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 15: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num15" placeholder="Nota15">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 16: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num16" placeholder="Nota16">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 17: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num17" placeholder="Nota17">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 18: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num18" placeholder="Nota18">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 19: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num19" placeholder="Nota19">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nota 20: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="num20" placeholder="Nota20">
        </div>
     

    <br><br>
    <button type="submit" class="btn btn-primary">Calcular
        <?php
            if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5']) && isset($_POST['num6']) && isset($_POST['num7']) && isset($_POST['num8']) && isset($_POST['num9']) && isset($_POST['num10']) && isset($_POST['num11']) && isset($_POST['num12']) && isset($_POST['num13']) && isset($_POST['num14']) && isset($_POST['num15']) && isset($_POST['num16']) && isset($_POST['num17']) && isset($_POST['num18']) && isset($_POST['num19']) && isset($_POST['num20'])){
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
                $num11 = $_POST['num11'];
                $num12 = $_POST['num12'];
                $num13 = $_POST['num13'];
                $num14 = $_POST['num14'];
                $num15 = $_POST['num15'];
                $num16 = $_POST['num16'];
                $num17 = $_POST['num17'];
                $num18 = $_POST['num18'];
                $num19 = $_POST['num19'];
                $num20 = $_POST['num20'];


            }
        ?>
    </button>
    <br><br>
    </form>  
  
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php

                echo exercicio22($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14, $num15, $num16, $num17, $num18, $num19, $num20);
                
        
            ?>
        </textarea>
    </div>
    
    <button class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
    
</body>
</html>