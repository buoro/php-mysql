<?php
require('cabecalho.php');
require('conecta.php');
require('banco-produto.php');

removeProduto($conexao, $_GET['id']);
?>

<p class="text-success">Produto removido com sucesso</p>
