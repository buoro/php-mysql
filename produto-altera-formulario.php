<?php
include('cabecalho.php');
include('conecta.php');
include('banco-categoria.php');
include('banco-produto.php');

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
    <h1>Alterando produto</h1>
    <form action="altera-produto.php" method="post">
      <input type="hidden" name="id" value="<?=$produto['id']?>">
      <table class="table">
        <tr>
          <td>Nome:</td>
          <td><input type="text" name="nome" class="form-control" value="<?=$produto['nome'];?>"></td>
        </tr>
        <tr>
          <td>Preço:</td>
          <td><input type="number" name="preco" class="form-control" value="<?=$produto['preco'];?>"></td>
        </tr>
        <tr>
          <td>Descricao:</td>
          <td><textarea name="descricao" class="form-control"><?=$produto['descricao'];?></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td style="text-align:left"><input type="checkbox" name="usado" value="true" <?=$usado;?>>Usado</td>
        </tr>
        <tr>
          <td>Categoria:</td>
          <td>
            <select class="form-control" name="categoria_id">
              <?php foreach ($categorias AS $categoria) :
                $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                $selecao = $essaEhACategoria ? "selected='selected'" : "";?>
                <option name="" value="<?=$categoria['id'];?>" <?=$selecao;?>>
                  <?=$categoria['nome'];?>
                </option>
              <?php endforeach?>

            </select>
          </td>
        </tr>
        <tr>
          <td>
            <button class="btn btn-primary" type="submit">Alterar</button>
          </td>
        </tr>
      </table>
    </form>
  <?php include('rodape.php'); ?>
