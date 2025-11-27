<?php
$sql = "SELECT * FROM venda WHERE id_venda=".$_REQUEST["id_venda"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<h1>Editar Venda</h1>

<form action="?page=venda-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row->id_venda; ?>">

    <div class="mb-3">
        <label>Data da Venda:</label>
        <input type="date" name="data_venda" class="form-control" value="<?php print $row->data_venda; ?>" required>
    </div>

    <div class="mb-3">
        <label>Valor da Venda:</label>
        <input type="number" step="0.01" name="valor_venda" class="form-control" value="<?php print $row->valor_venda; ?>" required>
    </div>

    <!-- SELECT VENDEDOR -->
    <div class="mb-3">
        <label>Vendedor:</label>
        <select name="vendedor_id_vendedor" class="form-control" required>
            <option value="">Selecione</option>

            <?php
                $sqlV = "SELECT * FROM vendedor ORDER BY nome_vendedor";
                $resV = $conn->query($sqlV);

                while($vend = $resV->fetch_object()){
                    $selected = ($vend->id_vendedor == $row->vendedor_id_vendedor) ? "selected" : "";
                    print "<option value='{$vend->id_vendedor}' $selected>{$vend->nome_vendedor}</option>";
                }
            ?>
        </select>
    </div>

    <!-- SELECT CLIENTE -->
    <div class="mb-3">
        <label>Cliente:</label>
        <select name="cliente_id_cliente" class="form-control" required>
            <option value="">Selecione</option>

            <?php
                $sqlC = "SELECT * FROM cliente ORDER BY nome_cliente";
                $resC = $conn->query($sqlC);

                while($cli = $resC->fetch_object()){
                    $selected = ($cli->id_cliente == $row->cliente_id_cliente) ? "selected" : "";
                    print "<option value='{$cli->id_cliente}' $selected>{$cli->nome_cliente}</option>";
                }
            ?>
        </select>
    </div>

    <!-- SELECT MODELO -->
    <div class="mb-3">
        <label>Modelo:</label>
        <select name="modelo_id_modelo" class="form-control" required>
            <option value="">Selecione</option>

            <?php
                $sqlM = "SELECT * FROM modelo ORDER BY nome_modelo";
                $resM = $conn->query($sqlM);

                while($mod = $resM->fetch_object()){
                    $selected = ($mod->id_modelo == $row->modelo_id_modelo) ? "selected" : "";
                    print "<option value='{$mod->id_modelo}' $selected>{$mod->nome_modelo}</option>";
                }
            ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Salvar Alterações</button>
</form>