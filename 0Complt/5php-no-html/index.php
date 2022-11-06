<?php
  include_once "back.php";
?>

<h1>Seja bem vindo ao nosso site</h1>
<p><?= $nome; ?> Veja nossas Ofertas: </p>

<h1>Confira nosso prinicpais produtos</h1>

<ul>
<?php foreach($produtos as $produto) : ?>
    <li><?= $produto; ?></li>
<?php endforeach; ?>
</ul>