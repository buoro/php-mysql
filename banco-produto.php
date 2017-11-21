<?php
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
  $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
  $resultadoDaInsercao = mysqli_query($conexao, $query);
  return $resultadoDaInsercao;
}
function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
  $query = "UPTADE
              produtos
            SET
              nome'{$nome}',
              preco={$preco},
              descricao='{$descricao}',
              categoria_id={$categoria_id},
              usado={$usado}
            WHERE id={$id}";
  return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
  $query = "SELECT * FROM produtos WHERE id={$id}";
  $resultado = mysqli_query($conexao, $query);
  return mysqli_fetch_assoc($resultado);
}

function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos p join categorias c on p.categoria_id=c.id");
  while ($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }
  return $produtos;
}

function removeProduto($conexao, $id) {
  $query = "DELETE FROM produtos WHERE id={$id}";
  return mysqli_query($conexao, $query);
}
