<?php
function adicionaProduto($conexao, $nome, $preco) {
  $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
  $resultadoDaInsercao = mysqli_query($conexao, $query);
  return $resultadoDaInsercao;
}

function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select * from produtos");
  while ($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }
  return $produtos;
}

fucntion removeProduto($conexao, $id) {
  $query = "DELETE FROM produtos WHERE id={$id}";
  return mysqli_query($conexao, $query);
}
