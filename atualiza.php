<body>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">        
    </head>


<?php
    require 'conexao.php';
    
    $id = $_GET['id'];
    $nome_novo = $_POST['nome_novo'];
    $preco_novo = $_POST['preco_novo'];
    $quantidade_novo = $_POST['quantidade_novo'];

    $sql = "UPDATE produtos SET nome = :nome_novo, preco = :preco_novo, quantidade = :quantidade_novo WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome_novo', $nome_novo);
    $stmt->bindParam(':preco_novo', $preco_novo);
    $stmt->bindParam(':quantidade_novo', $quantidade_novo);

    
    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
        header("location: listar.php");
    } else {
        echo "Erro ao atualizar produto.";
    }
?>
    
</body>