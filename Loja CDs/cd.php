<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Formulário de Produtos</h2>
        <form method="post" action="processar_formulario.php">
            <div class="form-group">
                <label for="titulo">Título do Disco:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="artista">Artista:</label>
                <input type="text" class="form-control" id="artista" name="artista" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
            <div class="form-group">
                <label for="idioma">Idioma:</label>
                <input type="text" class="form-control" id="idioma" name="idioma" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="estoque">Quantidade em Estoque:</label>
                <input type="number" class="form-control" id="estoque" name="estoque" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    


</body>
</html>
