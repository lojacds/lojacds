<?php
include("config.php"); // Inclui o arquivo de configuração

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $artista = $_POST["artista"];
    $genero = $_POST["genero"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];
    $idioma = $_POST["idioma"];

    // Inserção de dados no banco de dados (sem stmt)
    $sql = "INSERT INTO cd (titulo, artista, genero, preco, estoque, idioma) VALUES ('$titulo', '$artista', '$genero', $preco, $estoque, '$idioma')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Dados Cadastrados')</script>";
        echo "<script>window.location.href = 'http://localhost/loja_cds/index.php'</script>";
        echo "<br>";
        echo "<a href='index.php'>Voltar ao Menu</a>";
        
    } else {
        echo "Erro na inserção de dados: " . $conn->error;
        echo "<br>";
        echo "<a href='index.php'>Voltar ao Menu</a>";

    }
}
?>
