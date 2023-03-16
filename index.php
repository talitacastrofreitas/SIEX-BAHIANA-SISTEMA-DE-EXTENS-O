
<?php
include "includes/header.php";
include "includes/main1.php";
include "includes/footer.php";
include "includes/main.php"; 

?>

<p class="paragrafo text-start m-0">Informe seus dados de acesso.</p>

<div class="box">
  <form action="">
    <div class="field_box">
      <input type="email" class="form_input" autocomplete="off" required>
      <label for="" class="form_label">E-mail</label>
    </div>
    <div class="field_box">
      <input type="password" class="form_input" autocomplete="off" required>
      <label for="" class="form_label">Senha</label>
    </div>
    <div class="card-group paragrafos mb-3">

      <p>Esqueceu sua senha? <a href="redefinir.php">Clique aqui</a></p>
    </div>
    <button class="entrar" type="submit">Entrar</button>
    <div class="paragrafos-conta">
      <p>Não tem uma conta?</p>
    </div>
  </form>
  <form action="cadastro.php">
    <button class="cadastrar" type="submit">Cadastre-se</button>
  </form>
  </div>
