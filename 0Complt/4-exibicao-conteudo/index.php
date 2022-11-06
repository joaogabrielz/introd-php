<?php
  $nome = "Joao";
  $sobrenome = "gabriel";
?>

<form action="">
  <div>
    <input type="text" placeholder="<?= $nome; ?>">
  </div>
  <div>
    <input type="text" value="<?= $sobrenome; ?>">
  </div>
  <div>
    <input type="submit" value="Enviar">
  </div>
</form>