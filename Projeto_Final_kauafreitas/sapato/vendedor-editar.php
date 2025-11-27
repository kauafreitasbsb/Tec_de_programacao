<?php
$sql = "SELECT * FROM vendedor WHERE id_vendedor=".$_REQUEST["id_vendedor"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<h1>Editar Vendedor</h1>

<form action="?page=vendedor-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_vendedor" value="<?php print $row->id_vendedor; ?>">

    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome_vendedor" class="form-control" value="<?php print $row->nome_vendedor; ?>" required>
    </div>

    <div class="mb-3">
        <label>Telefone:</label>
        <input type="text" name="telefone_vendedor" class="form-control" value="<?php print $row->telefone_vendedor; ?>">
    </div>

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email_vendedor" class="form-control" value="<?php print $row->email_vendedor; ?>">
    </div>

    <button type="submit" class="btn btn-success">Salvar Alterações</button>
</form>