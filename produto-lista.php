<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php
function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select * from produtos");
  while ($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }
  return $produtos;
}
?>
<?php include("rodape.php");?>
