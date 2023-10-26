<?php
include("config.php"); // Inclui o arquivo de configuração

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    // Inserção de dados no banco de dados
    $sql = "INSERT INTO cliente (Nome, Endereco, Email, Numero_de_telefone) VALUES ('$nome', '$endereco', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Dados Cadastrados')</script>";
        echo "<script>window.location.href = 'http://localhost/loja_cds/index.php'</script>";
        echo "<br>";
        echo "<a href='cd.php'>Adicionar produto</a>";
        echo "<br>";
        echo "<a href='compra.php'>Fazer compra</a>";
        echo "<br>";
        echo "<a href='crud.php'>Cadastrar cliente</a>";
    } else {
        echo "Erro na inserção de dados: " . $conn->error;
        echo "<br>";
        echo "<a href='cd.php'>Adicionar produto</a>";
        echo "<br>";
        echo "<a href='compra.php'>Fazer compra</a>";
        echo "<br>";
        echo "<a href='crud.php'>Cadastrar cliente</a>";
    }
}
?>
