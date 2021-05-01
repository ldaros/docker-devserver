<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
</head>

<body>
    <main class="content" style="max-width: 800px; margin: auto; text-align: center;">
        <form name="Formulario" action="enviar.php" method="get">
            <label for="name">Nome:</label>
            <input type="text" name="nome" id="name" /><br>
            <label for="password">Senha:</label>
            <input type="password" name="senha" id="password" /><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" /><br>
            <br>
            <input type="submit" name="botao" value="Enviar" />
            <input type="reset" name="botao" value="Limpar" />

    </main>

</body>

</html>