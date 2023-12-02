<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="autenticar.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="password">Contraseña</label>
        <input type="text" name="password" id="password">
        <br>
        <input type="submit" value="Iniciar sesión">



<!-- 
        <button id="boton" onclick="mostar()">Mostrar</button> -->
    
    
        <table>
            <tr>
                <td class="borde-derecho" onclick="marcar('c1')" id="c1">1</td>
                <td class="borde-derecho" onclick="marcar('c2')" id="c2">2</td>
                <td onclick="marcar('c3')" id="c3">3</td>
            </tr>
            <tr>
                <td class="borde-derecho borde-superior" onclick="marcar('c4')" id="c4">4</td>
                <td class="borde-derecho borde-superior" onclick="marcar('c5')" id="c5">5</td>
                <td class="borde-superior" onclick="marcar('c6')" id="c6">6</td>
            </tr>
            <tr>
                <td class="borde-derecho borde-superior" onclick="marcar('c7')" id="c7">7</td>
                <td class="borde-derecho borde-superior" onclick="marcar('c8')" id="c8">8</td>
                <td class="borde-superior" onclick="marcar('c9')" id="c9">9</td>
            </tr>
            <tr>
                <td class="borde-derecho borde-superior" onclick="marcar('ca')" id="ca"> A</td>
                <td class="borde-derecho borde-superior" onclick="marcar('c0')" id="c0">0</td>
                <td class="borde-derecho borde-superior" onclick="marcar('cb')" id="cb">C</td>
            </tr>
            <tr>
                <td ><input type="submit" value="Iniciar sesión"></td>
                <!-- <td class="borde-derecho borde-superior" onclick="marcar('c0')" id="c0">0</td> -->
                <td class="borde-superior" onclick="limpiar()">limpiar</td>
            </tr>
        </table>
        <script>
            var numero = 1;
            function limpiar(){
                document.getElementById('password').value = '';
            }
            function marcar(casilla) {
                var passwordInput = document.getElementById('password');
                var numero = document.getElementById(casilla).textContent;
                if (casilla === 'c*') {
                    passwordInput.value += '*';
                }
                else {
                    passwordInput.value += numero;
                }
            }
    
            function mostar(){
                if (document.getElementById('password').type == 'password'){
                    document.getElementById('password').type = 'text'; 
                    document.getElementById('boton').innerHTML = 'Ocultar';
                }
                else if(document.getElementById('password').type == 'text'){
                    document.getElementById('password').type = 'password';
                    document.getElementById('boton').innerHTML = 'Mostrar';
                }
            }
            function borrarUltimoCaracter() {
                var passwordInput = document.getElementById('password');
                var passwordValue = passwordInput.value;
                if (passwordValue.length > 0) {
                    passwordInput.value = passwordValue.slice(0, -1);
                }
            }
    
        </script>
    </form>
</body>
</html>