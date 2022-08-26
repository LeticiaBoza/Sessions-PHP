<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área Restrita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php session_start();?>
    
    <div class="card divar">
    <h3>Olá <?php echo $_SESSION["user"]?>!</h3>
        <div class="card-header">
            Abaixo veremos o caos.
        </div>

    <form action="#" method="POST">
        <label> Insira um número para ver a tabuada: <input type="text" name="num"></label><br>
        <label for="tipo">Escolha qual método você quer exibir sua tabuada: </label>
        <select name="tipo" id="tipo" id="centrar">
                <option value="for">For</option>
                <option value="while">While</option>
                <option value="dowhile">Do While</option>
        </select>
        <br><br><input type="submit" value="Exibir" id="centrar">
    </form>

    <?php
        
        if(!empty ($_POST["tipo"])){

            $select = $_POST["tipo"];
            $num = $_POST["num"];

            if($select == "for"){
                echo "Tabuada tipo FOR. <br>";
                
                if(isset($num)){
                for($i = 0; $i <= 10; $i++){
                $resultado = $num * $i;
                echo "$num x $i = $resultado <br>";
            }    
        }
    }

            if ($select == "while"){ 
                echo "Tabuada tipo WHILE. <br>";
                $i = 0;
                $resultado = 0;
                while($i<=10){
                    echo "$num x $i = $resultado <br>";
                    $i++;
                }
            }
        
            if ($select == "dowhile"){
                echo "Tabuada tipo DO WHILE. <br>";
                $i = 0;
                $resultado = 0;
                do{
                    $resultado = $num * $i;
                    echo "$num x $i = $resultado <br>";
                    $i++;
                }while($i<=10);

            }
    }
        else{
            echo "Selecione uma opção.";
        }
    ?>
    
    <br><br><a href="index.php" class="fundo"> Logout </a>
    </div>
</body>
</html>