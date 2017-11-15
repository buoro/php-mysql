<?php include('cabecalho.php'); ?>
<?php include('conecta.php'); ?>
<?php
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];

    function adicionaProduto($conexao, $nome, $preco) {
      $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
      $resultadoDaInsercao = mysqli_query($conexao, $query);
      return $resultadoDaInsercao;
    }

    if(adicionaProduto($conexao, $nome, $preco)) {
?>
      <p class="text-success">Produto <?=$nome;?>, <?=$preco?> adicionado com sucesso.</p>
<?php
    } else {
      $msg = mysqli_error($conexao);
?>
      <p class="text-danger">Produto <?=$nome;?> não foi adicionado. Erro: <?=$msg?></p>
<?php
    }
?>
<?php include('rodape.php'); ?>
