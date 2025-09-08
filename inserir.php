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
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade =$_POST['quantidade'];
    
    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $quantidade);
   
    if ($stmt->execute()) {
        echo "Produto inserido com sucesso!";
        header("location: listar.php");
    } 
    else {
        echo "Erro ao inserir produto.";
    }
?>