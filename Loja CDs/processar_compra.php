<?php
include("config.php"); // Inclui o arquivo de configuração

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["data"];
    $cliente = $_POST["cliente"];
    $total = $_POST["total"];
    $produto = $_POST["produto"];
    $totalp = $_POST["totalp"];
    $idioma = $_POST["idioma"];
    
    // Inserção de dados no banco de dados (sem stmt)
    $sql = "INSERT INTO Compra (data, cliente, Total, produto, Totalp, idioma) VALUES ('$data', '$cliente', $total, '$produto', $totalp, '$idioma')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Compra Cadastrada')</script>";
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
        echo "<a href='cadastro.php'>Cadastrar cliente</a>";
    }
}
?>
