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
                            <a href='Form_Atualiza.php?id=XX' type='button' class='btn btn-danger'>Atualizar</a>
                            <a href='#' type='button' class='btn btn-warning'>Apagar</a>
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