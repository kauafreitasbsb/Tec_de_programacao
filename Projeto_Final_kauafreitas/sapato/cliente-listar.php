<h1>Listar Clientes</h1>

<?php
$sql = "SELECT * FROM cliente ORDER BY nome_cliente";
$res = $conn->query($sql);

if($res->num_rows > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>CPF</th>";
    print "<th>Telefone</th>";
    print "<th>Email</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_cliente."</td>";
        print "<td>".$row->nome_cliente."</td>";
        print "<td>".$row->cpf_cliente."</td>";
        print "<td>".$row->telefone_cliente."</td>";
        print "<td>".$row->email_cliente."</td>";

        print "<td>
            <a href='?page=cliente-editar&id_cliente=".$row->id_cliente."' class='btn btn-warning btn-sm'>Editar</a>
            <a href='?page=cliente-salvar&acao=excluir&id_cliente=".$row->id_cliente."' class='btn btn-danger btn-sm'>Excluir</a>
        </td>";

        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Nenhum cliente encontrado.</p>";
}
?>