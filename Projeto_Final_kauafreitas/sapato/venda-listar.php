<h1>Listar Vendas</h1>

<?php
$sql = "SELECT v.*, 
        c.nome_cliente,
        vd.nome_vendedor,
        m.nome_modelo
        FROM venda v
        INNER JOIN cliente c ON c.id_cliente = v.cliente_id_cliente
        INNER JOIN vendedor vd ON vd.id_vendedor = v.vendedor_id_vendedor
        INNER JOIN modelo m ON m.id_modelo = v.modelo_id_modelo
        ORDER BY v.id_venda DESC";

$res = $conn->query($sql);

if($res->num_rows > 0){

    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Data</th>";
    print "<th>Valor</th>";
    print "<th>Cliente</th>";
    print "<th>Vendedor</th>";
    print "<th>Modelo</th>";
    print "</tr>";

    while($row = $res->fetch_object()){
        print "<td>
    <a href='?page=venda-editar&id_venda=".$row->id_venda."' class='btn btn-warning btn-sm'>Editar</a>
    <a href='?page=venda-salvar&acao=excluir&id_venda=".$row->id_venda."' class='btn btn-danger btn-sm'>Excluir</a>
</td>";
        print "<tr>";
        print "<td>".$row->id_venda."</td>";
        print "<td>".date("d/m/Y", strtotime($row->data_venda))."</td>";
        print "<td>R$ ".$row->valor_venda."</td>";
        print "<td>".$row->nome_cliente."</td>";
        print "<td>".$row->nome_vendedor."</td>";
        print "<td>".$row->nome_modelo."</td>";
        print "<td>
    <a href='?page=venda-editar&id_venda=".$row->id_venda."' class='btn btn-warning btn-sm'>Editar</a>
    <a href='?page=venda-salvar&acao=excluir&id_venda=".$row->id_venda."' class='btn btn-danger btn-sm'>Excluir</a>
</td>";

        print "</tr>";
    }

    print "</table>";

} else {
    print "<p class='alert alert-danger'>Nenhuma venda cadastrada.</p>";
}
?>