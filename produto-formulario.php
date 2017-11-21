<?php
include('cabecalho.php');
include('conecta.php');
include('banco-categoria.php');
$categorias = listaCategorias($conexao);
?>
    <h1>Formulario de cadastro</h1>
    <form class="" action="adiciona-produto.php" method="post">
      <table class="table">
        <tr>
          <td>Nome:</td>
          <td><input type="text" name="nome" class="form-control"></td>
        </tr>
        <tr>
          <td>Preço:</td>
          <td><input type="number" name="preco" class="form-control"></td>
        </tr>
        <tr>
          <td>Descricao:</td>
          <td><textarea name="descricao" class="form-control"></textarea></td>
        </tr>
        <tr>
          <td>Categoria:</td>
          <td>
            <select class="form-control" name="categoria_id">
              <?php foreach ($categorias AS $categoria) : ?>
                <option name="" value="<?=$categoria['id'];?>">
                  <?=$categoria['nome'];?>
                </option>
              <?php endforeach?>

            </select>
          </td>
        </tr>
        <tr>
          <td><input type="submit" value="cadastrar" class="btn btn-primary"></td>
        </tr>
      </table>
    </form>
  <?php include('rodape.php'); ?>
