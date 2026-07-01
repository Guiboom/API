<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="anoNascimento">Ano Nascimento</label><br>
        <input type="date" name="anoNascimento" id="anoNascimento">
        <input type="submit" value="enviar">

    </form>
</body>
    <?php
        if (isset($_POST['anoNascimento']) && $_POST['anoNascimento'] !=""){
            $nascimento = strtotime($_POST['anoNascimento']);
            $anoNascimento = date("Y", $nascimento);
            $anoAtual = date("Y");

            $idade = $anoAtual - $anoNascimento;
            if($idade!=0){
                echo "<br>Você tem ".$idade." anos.";
                if($idade>=18){
                    echo "<br>Você é maior de idade";
                }else{
                    echo "<br>Você é menor de idade";
                }
            }   
        }
    ?>
</html>