<?php $render('header'); ?>
<hr>

<h2>Editar Usuario</h2>

<form action="<?= $base ?>/usuario/<?= $usuario['id']; ?>/editar" method="POST">
  <label for="">Nome:
    <input type="text" name="name" id="" value="<?= $usuario['nome']; ?>">
  </label>
  <br><br>
  <label for="">Email:
    <input type="email" name="email" id="" value="<?= $usuario['email']; ?>">
  </label>
  <br><br>
  <input type="submit" value="Editar">
  <a href="<?= $base ?>/">Voltar</a>
  <br><br>
</form>

<?php $render('footer'); ?>