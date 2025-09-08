<html>

<?php
    include 'pedaco.php';
?>
    <div class="container">
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="nome" placeholder="Digite o nome do produto:" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="preco" placeholder="Digite o preço do produto:" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="quantidade" placeholder="Digite a quantidade do produto:" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>