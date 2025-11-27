<h1>Cadastrar Vendedor</h1>

<form action="?page=vendedor-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome_vendedor" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Telefone:</label>
        <input type="text" name="telefone_vendedor" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email_vendedor" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>