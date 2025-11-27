<?php

switch (@$_REQUEST["acao"]) {

    case 'cadastrar':
        $sql = "INSERT INTO vendedor (
                    nome_vendedor, telefone_vendedor, email_vendedor
                ) VALUES (
                    '{$_POST['nome_vendedor']}',
                    '{$_POST['telefone_vendedor']}',
                    '{$_POST['email_vendedor']}'
                )";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Vendedor cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=vendedor-listar';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar vendedor');</script>";
        }
    break;

    case 'editar':
        $sql = "UPDATE vendedor SET
                    nome_vendedor='{$_POST['nome_vendedor']}',
                    telefone_vendedor='{$_POST['telefone_vendedor']}',
                    email_vendedor='{$_POST['email_vendedor']}'
                WHERE id_vendedor={$_POST['id_vendedor']}";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Vendedor editado com sucesso!');</script>";
            print "<script>location.href='?page=vendedor-listar';</script>";
        } else {
            print "<script>alert('Erro ao editar vendedor');</script>";
        }
    break;

    case 'excluir':
        $sql = "DELETE FROM vendedor WHERE id_vendedor={$_REQUEST['id_vendedor']}";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Vendedor excluído!');</script>";
            print "<script>location.href='?page=vendedor-listar';</script>";
        } else {
            print "<script>alert('Erro ao excluir vendedor');</script>";
        }
    break;
}