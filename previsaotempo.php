<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperatura = $_POST['temperatura'];

    if ($temperatura >=30 ) {
        echo "O dia está ensolarado";
    } else {
        echo "tá suave";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Previsão do Tempo</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temperatura">Temperatura:</label>
        <input type="text" id="temperatura" name="temperatura">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>