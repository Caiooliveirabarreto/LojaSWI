<?php
    include 'pedaco.php';
?>

    <div class="container">
        <form action="atualizar.php" method="POST">

            <?php
                $id = $_GET['id'];
                echo "Valor passado por GET: $id";
            ?>    
            <div class="mb-3">
                Nome: <input type="text" name="nome" class="form-control">
            </div>
            <div class="mb-3">
                Preço: <input type="text" name="preco" class="form-control">
            </div>
            <div class="mb-3">
                Quantidade: <input type="text" name="quantidade" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>