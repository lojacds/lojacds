<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Conexão ao Banco de Dados</title>
    <!-- Inclua as referências ao Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Formulário de Conexão ao Banco de Dados</h2>
        <form action="processar_compra.php" method="post">
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <div class="form-group">
                <label for="cliente">Cliente:</label>
                <input type="text" class="form-control" id="cliente" name="cliente" required>
            </div>
            <div class="form-group">
                <label for="produto">Produto:</label>
                <input type="text" class="form-control" id="produto" name="produto" required>
            </div>
            <div class="form-group">
                <label for="idioma">Idioma:</label>
                <input type="text" class="form-control" id="idioma" name="idioma" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" class="form-control" id="total" name="total" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="totalp">Quantidade de produtos:</label>
                <input type="number" class="form-control" id="totalp" name="totalp" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Conectar ao Banco de Dados</button>
        </form>
    </div>

    <!-- Inclua as referências ao Bootstrap JavaScript e jQuery (opcional) para recursos interativos -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
