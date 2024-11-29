<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "gerenciamento_fornecedores";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
$query = "SELECT *FROM fornecedores";
$consulta_fornecedores = mysqli_query($conexao, $query);
?>

<h1>Inserir novo fornecedor</h1><br>
<form method="post" action="processa_fornecedores.php">
    <label>Nome fornecedor:</label><br>
    <input type="varchar" name="nome_forn" placeholder="Digite o nome do fornecedor">
    <br><br>
    <label>cnpj:</label><br>
    <input type="text" name="cnpj_forn" placeholder="Digite o cnpj">
    <br><br>
    <input type="submit" value="Inserir fornecedor">
</form>

<br><br>

<table>
    <thead>
        <tr>
            <th>Nome fornecedor</th>
            <th>CNPJ</th>
            <th>Id</th>
        </tr>   
    </thead>    


    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_fornecedores)){
                echo'<tr>';
                    echo'<td>'.$linha['nome_forn'].'</td>';
                    echo'<td>'.$linha['cnpj_forn'].'</td>   ';
                    echo'<td>'.$linha['id'].'</td>          ';
                echo'</tr>';   
            ?>
    
        <?php
            }
    
        ?>
    </tbody>
</table> 

