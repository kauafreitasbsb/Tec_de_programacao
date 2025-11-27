<?php

switch (@$_REQUEST["acao"]) {

    // --- CADASTRAR ---
    case 'cadastrar':

        $sql = "INSERT INTO venda (
                    data_venda, valor_venda,
                    vendedor_id_vendedor,
                    cliente_id_cliente,
                    modelo_id_modelo
                ) VALUES (
                    '{$_POST['data_venda']}',
                    '{$_POST['valor_venda']}',
                    '{$_POST['vendedor_id_vendedor']}',
                    '{$_POST['cliente_id_cliente']}',
                    '{$_POST['modelo_id_modelo']}'
                )";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Venda cadastrada com sucesso!');</script>";
            print "<script>location.href='?page=venda-listar';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar venda');</script>";
        }
    break;


    // --- EDITAR ---
    case 'editar':

        $sql = "UPDATE venda SET
                    data_venda='{$_POST['data_venda']}',
                    valor_venda='{$_POST['valor_venda']}',
                    vendedor_id_vendedor='{$_POST['vendedor_id_vendedor']}',
                    cliente_id_cliente='{$_POST['cliente_id_cliente']}',
                    modelo_id_modelo='{$_POST['modelo_id_modelo']}'
                WHERE id_venda={$_POST['id_venda']}";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Venda editada com sucesso!');</script>";
            print "<script>location.href='?page=venda-listar';</script>";
        } else {
            print "<script>alert('Erro ao editar venda');</script>";
        }
    break;


    // --- EXCLUIR ---
    case 'excluir':

        $sql = "DELETE FROM venda WHERE id_venda={$_REQUEST['id_venda']}";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Venda excluída!');</script>";
            print "<script>location.href='?page=venda-listar';</script>";
        } else {
            print "<script>alert('Erro ao excluir venda');</script>";
        }
    break;
}