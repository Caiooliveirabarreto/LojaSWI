<body>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>


    
<?php
include 'pedaco.php';
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $produto['id'] . "</td>";
                    echo "<td> " . $produto['nome'] . " </td>";
                    echo "<td> " . $produto['preco'] . " </td>";
                    echo "<td> " . $produto['quantidade'] . "</td>";
                    echo "
                    <td>
                        <div class='btn-group' role='group'>
                            <a href='Form_Atualiza.php?id=" . $produto['id'] . "' type='button' class='btn-custom'>Atualizar</a>
                            <a href='excluir.php?id=" . $produto['id'] . "' type='button' class='btn-custom'>Apagar</a>
                        </div>
                    </td>
                    ";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>