<?php

switch (@$_REQUEST["acao"]) {

    case 'cadastrar':
        $sql = "INSERT INTO cliente (
                    nome_cliente, cpf_cliente, telefone_cliente,
                    email_cliente, endereco_cliente, dt_nasc_cliente
                ) VALUES (
                    '{$_POST['nome_cliente']}',
                    '{$_POST['cpf_cliente']}',
                    '{$_POST['telefone_cliente']}',
                    '{$_POST['email_cliente']}',
                    '{$_POST['endereco_cliente']}',
                    '{$_POST['dt_nasc_cliente']}'
                )";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Cliente cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=cliente-listar';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar cliente');</script>";
        }
    break;

    case 'editar':
        $sql = "UPDATE cliente SET
                    nome_cliente='{$_POST['nome_cliente']}',
                    cpf_cliente='{$_POST['cpf_cliente']}',
                    telefone_cliente='{$_POST['telefone_cliente']}',
                    email_cliente='{$_POST['email_cliente']}',
                    endereco_cliente='{$_POST['endereco_cliente']}',
                    dt_nasc_cliente='{$_POST['dt_nasc_cliente']}'
                WHERE id_cliente={$_POST['id_cliente']}";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Cliente editado com sucesso!');</script>";
            print "<script>location.href='?page=cliente-listar';</script>";
        } else {
            print "<script>alert('Erro ao editar cliente');</script>";
        }
    break;

    case 'excluir':
        $sql = "DELETE FROM cliente WHERE id_cliente={$_REQUEST['id_cliente']}";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Cliente excluído!');</script>";
            print "<script>location.href='?page=cliente-listar';</script>";
        } else {
            print "<script>alert('Erro ao excluir');</script>";
        }
    break;
}