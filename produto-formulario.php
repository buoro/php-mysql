<?php include('cabecalho.php'); ?>
<?php include('conecta.php'); ?>
    <h1>Formulario de cadastro</h1>
    <form class="" action="adiciona-produto.php" method="get">
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
          <td><input type="submit" value="cadastrar" class="btn btn-primary"></td>
        </tr>
      </table>
    </form>
  <?php include('rodape.php'); ?>
