<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora Básica</h1>

    <div>
        <p>
            El resultado es: 
        </p>
        <form action="process.php" method="post">
            <div>
                <label for="">Primero numero</label>
                <input type="number" name="numberOne">
            </div>
            <div>
                <select name="operator" id="">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">* <small>(multiplicación)</small></option>
                    <option value="/">/ <small>(división)</small></option>
                </select>
            </div>
            <div>
                <label for="">Segundo numero</label>
                <input type="number" name="numberTwo">
            </div>
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>