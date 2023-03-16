<!doctype html>
<html lang="pt-br">

<head>
  <title>Bootstrap</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- <meta http-equiv="refresh" content="30"> -->
 
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cad.css">
</head>

<body>
    <!--titulos principais-->
    <div class="titles text-start row row-cols-3" style="color:#ffff;">
    <p style="font-weight: 700; font-size:34px">SIEX BAHIANA</p>
    <a class="btnlogin" href="index.php" type="submit">Fazer login</a>
    <p style="font-weight: 500; font-size:14px;" class="subtitle">SISTEMA DE EXTENSÃO</p>
  
    </div>
  <header>
    <!-- BARRA DE NAVEGAÇÃO / CONTAINER -->
        <div class="container">
        <div class="top text-start">
        <p class="title" style="font-size: 26px;
    font-weight: 600;">Crie sua conta</p>
        <p class="mb-1 mt-3">Sou brasileiro</p>

<!-- ================================================================================================== -->

        <!--CHECKBOX-->

    <div class="btn-group">
        <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
        <label class="btn btn-outline-success" for="success-outlined">Sim</label>

        <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
        <label class="btn btn-outline-danger" for="danger-outlined">Não</label>
    </div>
<!-- ====================================================================================================== -->
                            <!--INPUTS -->  

<div class="field_box row row-cols-3 row-cols-lg-2 align-items-center mt-3">

        <div class="col-2">
          <input type="text" class="form_input" autocomplete="off" required>
          <label for="" class="form_label">Nome completo</label>
        </div>

        <div class="col-2">
          <input type="cpf" class="form_input" autocomplete="off" required>
          <label for="" class="form_label">CPF</label>
        </div>

        <div class="col-2">
          <input type="email" class="form_input" autocomplete="off" required>
          <label for="" class="form_label">E-mail</label>
        </div>

    </div>
    <!--CHECKBOX-->
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Possuo vínculo com a instituição</label>
</div>

    </div>

    <!-- SEGUNDA PARTE CONTAINER -->
<!--=================================================================================================== -->
    <div class="top text-start">
        <p class="title mt-5" style="font-size: 26px;
    font-weight: 600;">Crie sua senha</p>
        <p class="mb-1 mt-3">A senha deve conter no mínimo 8 caracteres alfanuméricos, 
        com pelo menos uma letra maiúscula e um caractere especial (!%#@).</p>

<!-- ================================================================================================== -->

                            <!--INPUTS -->  

<div class=" field_box row row-cols-2 row-cols-lg-2 align-items-center mt-3">

        <div class="col-2">
          <input type="password" class="form_input" autocomplete="off" required>
          <label for="" class="form_label">Senha</label>
        </div>

        <div class="col-2">
          <input type="password" class="form_input" autocomplete="off" required>
          <label for="" class="form_label">Repetir senha</label>
        </div>  

</div>
<!--=====================================================================================================-->
    <!--CHECKBOX-->
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Concorda com nossos <b>Termos e Condições</b> e <b>Declaração de Privacidade</b></label>
</div><br><br>

<a class="btncadastrar" href="#" type="submit">Cadastrar</a>
    </div>
  </header>

  <main>

  </main>
  <footer>
    <!-- RODAPÉ -->

  </footer>
  <!-- Bootstrap Bibliotecas de JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

