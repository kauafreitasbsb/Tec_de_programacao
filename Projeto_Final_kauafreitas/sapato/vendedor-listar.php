<h1>Listar Vendedores</h1>

<?php
$sql = "SELECT * FROM vendedor";
$res = $conn->query($sql);

if($res->num_rows > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>Telefone</th>";
    print "<th>Email</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_vendedor."</td>";
        print "<td>".$row->nome_vendedor."</td>";
        print "<td>".$row->telefone_vendedor."</td>";
        print "<td>".$row->email_vendedor."</td>";

        print "<td>
            <a href='?page=vendedor-editar&id_vendedor=".$row->id_vendedor."' class='btn btn-warning btn-sm'>Editar</a>
            <a href='?page=vendedor-salvar&acao=excluir&id_vendedor=".$row->id_vendedor."' class='btn btn-danger btn-sm'>Excluir</a>
        </td>";

        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Nenhum vendedor encontrado.</p>";
}
?>