# 🥿 Sistema de Vendas de Sapataria

Sistema web desenvolvido em PHP para gerenciamento de vendas, clientes,
vendedores, marcas e modelos de sapatos, permitindo cadastro, listagem,
edição e exclusão de registros utilizando CRUD completo.

------------------------------------------------------------------------

## 📋 Documentação Complementar da Disciplina

-   [ ] **Documentação complementar da disciplina, contendo:**
    -   [x] Projeto desenvolvido com aplicação CRUD\
    -   [ ] Pseudocódigo\
    -   [ ] Fluxograma\
    -   [ ] Especificação em linguagem algorítmica

------------------------------------------------------------------------

## 🎯 Descrição do Projeto

O Sistema de Vendas de Sapataria oferece uma interface web simples,
moderna e responsiva, permitindo controlar clientes, marcas, modelos de
sapatos, vendedores e registrar vendas.\
O sistema utiliza MySQL com relacionamento entre tabelas e garante
operações CRUD completas.

### Funcionalidades Principais

-   ✅ CRUD de Clientes\
-   ✅ CRUD de Marcas\
-   ✅ CRUD de Modelos de Sapatos\
-   ✅ CRUD de Vendedores\
-   ✅ CRUD de Vendas\
-   ✅ Relacionamentos com chaves estrangeiras\
-   ✅ Interface responsiva com Bootstrap

------------------------------------------------------------------------

## 🛠️ Tecnologias Utilizadas

-   PHP\
-   MySQL\
-   HTML / CSS / Bootstrap\
-   XAMPP / WAMP

------------------------------------------------------------------------

## 📁 Estrutura do Projeto

    sapataria/
    │
    ├── index.php
    ├── config.php
    ├── sapato.sql
    │
    ├── clientes/
    ├── marcas/
    ├── modelos/
    ├── vendedores/
    ├── vendas/
    │
    ├── css/
    └── js/

------------------------------------------------------------------------

## 🗄️ Estrutura do Banco de Dados

### Tabela: cliente

-   id_cliente\
-   nome_cliente\
-   cpf_cliente\
-   telefone_cliente\
-   email_cliente\
-   endereco_cliente\
-   dt_nasc_cliente

### Tabela: marca

-   id_marca\
-   nome_marca

### Tabela: modelo

-   id_modelo\
-   marca_id_marca\
-   nome_modelo\
-   cor_modelo\
-   categoria_modelo\
-   genero_modelo\
-   preco_modelo\
-   tamanho_modelo

### Tabela: vendedor

-   id_vendedor\
-   nome_vendedor\
-   telefone_vendedor\
-   email_vendedor

### Tabela: venda

-   id_venda\
-   data_venda\
-   valor_venda\
-   vendedor_id_vendedor\
-   cliente_id_cliente\
-   modelo_id_modelo

------------------------------------------------------------------------

## 🚀 Instalação

1.  Coloque o projeto em:

```{=html}
<!-- -->
```
    C:/xampp/htdocs/sapataria/

2.  Importe o banco `sapato.sql` no phpMyAdmin.

3.  Configure o arquivo `config.php`:

``` php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sapato";
$conn = new mysqli($host, $user, $pass, $db);
?>
```

------------------------------------------------------------------------

## 🔄 Pseudocódigo -- Cadastro de Venda (Flow Algoritmo)

    Algoritmo CadastroVenda

    Início

        Leia cliente
        Leia vendedor
        Leia modelo
        Leia valor

        Se (cliente = vazio) OU (vendedor = vazio) OU (modelo = vazio) OU (valor = vazio) Então
            Escreva "Erro: Preencha todos os campos obrigatórios."
            Pare
        FimSe

        conexao ← ConectarBanco()

        Se conexao = falha Então
            Escreva "Erro ao conectar ao banco."
            Pare
        FimSe

        comandoSQL ← 
            "INSERT INTO venda (data_venda, valor_venda, vendedor_id_vendedor, cliente_id_cliente, modelo_id_modelo)
             VALUES (DataAtual, valor, vendedor, cliente, modelo)"

        resultado ← ExecutarSQL(comandoSQL)

        Se resultado = sucesso Então
            Escreva "Venda cadastrada com sucesso!"
        Senão
            Escreva "Erro ao cadastrar venda."
        FimSe

        FecharConexao(conexao)

    Fim

------------------------------------------------------------------------

## 📊 Fluxograma ASCII -- Cadastro de Venda

       ┌───────────────┐
       │     INÍCIO     │
       └───────┬────────┘
               │
               ▼
     ┌────────────────────┐
     │ Ler dados da venda │
     └─────────┬──────────┘
               │
               ▼
     ┌───────────────────────────────┐
     │ Campos estão preenchidos?     │
     └───────┬───────────────────────┘
             │ Sim
             ▼
     ┌───────────────────────┐
     │ Conectar ao banco     │
     └─────────┬─────────────┘
               │
               ▼
     ┌───────────────────────────────┐
     │ Conexão bem-sucedida?         │
     └───────┬───────────────────────┘
             │ Sim
             ▼
     ┌───────────────────────────────┐
     │ Executar INSERT da venda      │
     └─────────┬─────────────────────┘
               │
               ▼
     ┌───────────────────────────────┐
     │ Venda inserida com sucesso?   │
     └───────┬───────────────────────┘
             │ Sim
             ▼
     ┌───────────────────────────────┐
     │ Exibir "Venda cadastrada!"    │
     └─────────┬─────────────────────┘
               │
               ▼
            ┌───────┐
            │  FIM   │
            └────────┘

------------------------------------------------------------------------

## 👨‍💻 Desenvolvido por

Kauã Victor da Silva Freitas
