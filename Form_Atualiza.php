<body class="bg-dark text-white">

<?php
    include 'pedaco.php';
    $id = $_GET['id'];

?>

    <div class="container">
        <form action="atualiza.php?id=<?php echo $id; ?>" method="POST"> 
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos WHERE id = $id";
                $stmt = $pdo->query($sql);
                $produto = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>

            <div class="mb-3">
                Nome: <input type="text" value="<?php echo $produto['nome']; ?>" name="nome_novo" class="form-control">
            </div>
            <div class="mb-3">
                Preço: <input type="text" value="<?php echo $produto['preco']; ?>" name="preco_novo" class="form-control">
            </div>
            <div class="mb-3">
                Quantidade: <input type="text" value="<?php echo $produto['quantidade']; ?>" name="quantidade_novo" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>