<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "gerenciamento_fornecedores";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$a = $_POST['nome_forn'];
$b = $_POST['cnpj_forn'];


$query = "INSERT INTO fornecedores (nome_forn, cnpj_forn)
            VALUES('$a','$b')";

mysqli_query($conexao, $query);

//echo"Fornecedor cadastrado com sucesso";//

header('location:index.php');