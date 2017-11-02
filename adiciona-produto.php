<!DOCTYPE html>
<html>
  <?php
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];
  ?>
  <head>
    <meta charset="utf-8">
    <title>Adiciona Produto</title>
  </head>
  <body>
    Produto <?=$nome?> adicionado com sucesso! E custa <?=$preco?> reais.
  </body>
</html>
