<?php
function adicionaProduto($conexao, $nome, $preco, $descricao, $categoria_id) {
  $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
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

function removeProduto($conexao, $id) {
  $query = "DELETE FROM produtos WHERE id={$id}";
  return mysqli_query($conexao, $query);
}
