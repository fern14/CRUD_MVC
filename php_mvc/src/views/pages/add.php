<?php $render('header'); ?>
<hr>

<h2>Adicionar novo Usuario</h2>

<form action="<?= $base ?>/novo" method="POST">
  <label for="">Nome:
    <input type="text" name="name" id="">
  </label>
  <br><br>
  <label for="">Email:
    <input type="email" name="email" id="">
  </label>
  <br><br>
  <input type="submit" value="Adicionar">
  <br><br>
</form>

<?php $render('footer'); ?>