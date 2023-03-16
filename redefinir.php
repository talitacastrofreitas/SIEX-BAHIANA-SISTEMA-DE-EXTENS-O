<?php
include "includes/header.php";
include "includes/main1.php";
include "includes/footer.php";
include "includes/main.php"; 
?>

<p class="paragrafo text-start m-0">Para recuperar seu acesso, informe seu e-mail cadastrado no sistema.</p>

        <div class="box">
            <form action="">
              <div class="field_box">
                <input type="text" class="form_input" autocomplete="off" required>
                <label for="" class="form_label">E-mail</label>
              </div>
              <div class="field_box">
                <input type="cpf" class="form_input" autocomplete="off" required>
                <label for="" class="form_label">CPF/Passaporte</label>
              </div>
    
              <button class="enviar" href="#" type="submit">Enviar</button>
              <br>
            </form>
            <form action="index.php" method="POST">
            <button class="cancelar" href="index.php" type="submit">Cancelar</button>
</form>
          </div>