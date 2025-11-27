<?php
// Certifique-se de que $conn está definido e é uma conexão MySQLi válida

switch ($_REQUEST["acao"]) {
    
    // ------------------------------------------------------------------------
    // CASE CADASTRAR (Seguro: Usando Prepared Statements)
    // ------------------------------------------------------------------------
    case 'cadastrar':
        // 1. Prepara a query com placeholders (?)
        $stmt = $conn->prepare("INSERT INTO modelo (
                marca_id_marca,
                nome_modelo,
                cor_modelo,
                categoria_modelo,
                genero_modelo,
                preco_modelo,
                tamanho_modelo
            ) VALUES (?, ?, ?, ?, ?, ?, ?)");

        // 2. Associa as variáveis aos placeholders (i: integer, s: string, d: double/decimal)
        // Assumindo: marca_id_marca (i), preco_modelo (d), restante (s)
        $stmt->bind_param("isssssd",
            $_POST["marca_id_marca"],
            $_POST["nome_modelo"],
            $_POST["cor_modelo"],
            $_POST["categoria_modelo"],
            $_POST["genero_modelo"],
            $_POST["preco_modelo"],
            $_POST["tamanho_modelo"]
        );

        // 3. Executa a instrução
        if ($stmt->execute()) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=modelo-listar';</script>";
        } else {
            // Em caso de erro, você pode usar $stmt->error para diagnosticar
            print "<script>alert('Não foi possível efetuar o cadastro!');</script>";
            print "<script>location.href='?page=modelo-listar';</script>";
        }
        $stmt->close();
        break;
    
    // ------------------------------------------------------------------------
    // CASE EDITAR (Seguro: Usando Prepared Statements e Lógica Corrigida)
    // ------------------------------------------------------------------------
    case 'editar':
        // 1. Prepara a query com placeholders (?) e corrige a lógica do tamanho/preço
        $stmt = $conn->prepare("UPDATE modelo SET
                marca_id_marca = ?,
                nome_modelo = ?,
                cor_modelo = ?,
                categoria_modelo = ?,
                genero_modelo = ?,
                preco_modelo = ?,
                tamanho_modelo = ? 
            WHERE
                id_modelo = ?");

        // 2. Associa as variáveis (id_modelo é o último parâmetro para o WHERE)
        $stmt->bind_param("ssssssdi", // Tipos: 5x string, 1x double, 1x integer (para WHERE)
            $_POST['marca_id_marca'],
            $_POST['nome_modelo'],
            $_POST['cor_modelo'],
            $_POST['categoria_modelo'],
            $_POST['genero_modelo'],
            $_POST['preco_modelo'], // Corrigido
            $_POST['tamanho_modelo'], // Corrigido
            $_POST['id_modelo']
        );

        // 3. Executa a instrução
        if ($stmt->execute()) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=modelo-listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar!');</script>";
            print "<script>location.href='?page=modelo-listar';</script>";
        }
        $stmt->close();
        break;

    // ------------------------------------------------------------------------
    // CASE EXCLUIR (Seguro: Usando Prepared Statements)
    // ------------------------------------------------------------------------
    case 'excluir':
        // 1. Prepara a query
        $stmt = $conn->prepare("DELETE FROM modelo WHERE id_modelo = ?");
        
        // 2. Associa a variável
        $stmt->bind_param("i", $_REQUEST['id_modelo']); // i: integer

        // 3. Executa a instrução
        if ($stmt->execute()) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=modelo-listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=modelo-listar';</script>";
        }
        $stmt->close();
        break;
}

// Fechamento da conexão, se necessário, pode ser feito no final do script principal
// $conn->close(); 
?>