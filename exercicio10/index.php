<!DOCTYPE html>
<html>
<head>
    <title>NÚMERO E SEU INTERVALO</title>
</head>
<body>
    <h2>NÚMERO E SEU INTERVALO</h2>
    <form action="calcular.php" method="post">
        <label for="palavra">Digite um número:</label><br>
        <input type="text" id="palavra" name="numero" required><br><br>

        <label for="quantidade">Digite o intervalo:</label><br>
        <input type="number" id="quantidade" name="intervalo" min="1" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>