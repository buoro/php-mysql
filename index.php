<?php include('cabecalho.php'); ?>
  <h1>Bem Vindo!!</h1>
  <h2>Login</h2>
  <form action="login.php" method="post">
    <table class="table">
      <tr>
        <td>e-mail</td>
        <td><input class="form-control" type="email" name="email"></td>
      </tr>
      <tr>
        <td>senha</td>
        <td><input class="form-control" type="password" name="senha"></td>
      </tr>
      <tr>
        <td><button class="btn btn-primary" type="submit">Login</button></td>
      </tr>
    </table>
  </form>

<?php include('rodape.php'); ?>
