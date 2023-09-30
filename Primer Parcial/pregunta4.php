<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="menu.php" method="GET">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required>
        <br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required>
        <br>
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="dividision">Dividir</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
