<h1>Cadastrar Venda</h1>

<form action="?page=venda-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <!-- DATA DA VENDA -->
    <div class="mb-3">
        <label>Data da Venda:</label>
        <input type="date" name="data_venda" class="form-control" required>
    </div>

    <!-- VALOR DA VENDA -->
    <div class="mb-3">
        <label>Valor da Venda:</label>
        <input type="number" step="0.01" name="valor_venda" class="form-control" required>
    </div>

    <!-- SELECT VENDEDOR -->
    <div class="mb-3">
        <label>Vendedor:</label>
        <select name="vendedor_id_vendedor" class="form-control" required>
            <option value="">Selecione</option>

            <?php
                $sql = "SELECT * FROM vendedor ORDER BY nome_vendedor";
                $res = $conn->query($sql);

                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_vendedor."'>".$row->nome_vendedor."</option>";
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
                $sql = "SELECT * FROM cliente ORDER BY nome_cliente";
                $res = $conn->query($sql);

                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_cliente."'>".$row->nome_cliente."</option>";
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
                $sql = "SELECT * FROM modelo ORDER BY nome_modelo";
                $res = $conn->query($sql);

                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_modelo."'>".$row->nome_modelo."</option>";
                }
            ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>