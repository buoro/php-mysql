<?php
include('cabecalho.php');
include('conecta.php');
include('banco-produto.php');

$id=$_GET['id'];
removeProduto($conexao, $id);
?>

<p class="text-success">Produto <?=$id?> removido com sucesso</p>
<?php include('rodape.php');?>
