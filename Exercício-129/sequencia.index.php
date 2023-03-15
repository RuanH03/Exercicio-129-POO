<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Moon+Dance&display=swap');        
        select{
            font-family: 'Montserrat', sans-serif;
            width: 160px;
            text-align: center;
            cursor: pointer;
            border-top: none;
            border-left: none;
            border-right: none;
        }
        input[type = radio]{
            cursor: pointer;
        }
        button{
            cursor: pointer;
        }
        
    </style>
</head>

<body>
    <form action="" method="post">
            <!-- ----------------------------SELECT1------------------------------- -->
            <p>Selecione o valor inicial :
                <select name="select1">
                    <option value="" selected >Informe o valor </option>

                        <?php for($i = 1;$i <= 100; $i++){echo "<option>$i</option>";}?>
                
                </select>
            </p>
            <!-- ------------------------------------------------------------------ -->
            <!-- ----------------------------SELECT2------------------------------- -->
            <p>Selecione o valor final :   
                <select name="select2">
                    <option value="" selected >Informe o valor </option>

                        <?php for($i = 1;$i <= 100; $i++){echo "<option>$i</option>";}?>
                
                </select>
            </p>
            <!-- ------------------------------------------------------------------ -->
            <!-- ----------------------------RADIO--------------------------------- -->
            <p>Mostrar :</p>
            <p><input type="radio" name="radio1" value="1" required>Todos</p>
            <p><input type="radio" name="radio1" value="2" required>Apenas os pares</p>
            <p><input type="radio" name="radio1" value="3" required>Apenas os ímpares</p>
            <button name="botao">Mostrar a sequência</button><br><br>
            <!-- ------------------------------------------------------------------ -->
    </form>



<!------------------------------------- PHP ------------------------------------------>
<?php 

include_once "Sequencia.class.php";

if(isset($_POST["botao"])){
    if($_POST["select1"] > $_POST["select2"]){
        echo "O valor inicial deve ser menor que valor final! <br>";
    }
    else{

        $valorInicial = $_POST["select1"];
        $valorFinal = $_POST["select2"];

        if($valorInicial !== '' && $valorFinal !== ''){

        // Novo objeto 
        $sequencia = new sequencia();
        $sequencia->setInicio($valorInicial);
        $sequencia->setFim($valorFinal);

            // Verificar qual tipo de radio foi selecionado para chamar o metodo
            if($_POST["radio1"] == "1"){
                echo $sequencia->exibirTodosNumeros();
            }
            if($_POST["radio1"] == "2"){
                echo $sequencia->exibirNumerosPares();
            }
            if($_POST["radio1"] == "3"){
                echo $sequencia->exibirNumerosImpares();
            }
        
        echo "<a href=\"sequencia.index.php\">retornar</a>";
        
        }else{
            echo "<br>";
            echo "Preencha todos os campos !";
        }
    }
}
?>

</body>
</html>