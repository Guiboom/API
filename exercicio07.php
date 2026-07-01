<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperaturas</title>
</head>
<body>
    <form method="POST">
        <label for="temperatura">Temperatura</label><br>
        <input type="number" name="temperatura" id="temperatura" required step="0.1"><br><br>
        
        <p>Escolha a unidade de temperatura de origem:</p>
        
        <input type="radio" id="Celsius" name="escala" value="Celsius" checked>
        <label for="Celsius">Celsius para Fahrenheit</label><br>

        <input type="radio" id="Fahrenheit" name="escala" value="Fahrenheit">
        <label for="Fahrenheit">Fahrenheit para Celsius</label><br><br>

        <input type="submit" value="enviar">
    </form>

    <?php
        if (isset($_POST['temperatura']) && isset($_POST['escala']) && $_POST['temperatura'] !== "") {
            
            $temp = $_POST['temperatura'];
            $escala = $_POST['escala'];

            if ($escala == "Celsius") {
                $resultado = ($temp * 9/5) + 32;
                echo "<br>Resultado: " . $temp . "°C é igual a " . $resultado . "°F";
            } 
            else if ($escala == "Fahrenheit") {
                $resultado = ($temp - 32) * 5/9;
                echo "<br>Resultado: " . $temp . "°F é igual a " . round($resultado, 2) . "°C";
            }
        }
    ?>
</body>
</html>