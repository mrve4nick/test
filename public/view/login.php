<section class="login">
  <h2 class="h1">Вход</h2>
  <div class="col-6">
    <form action="?action=signin" method="post">
      <span>Email</span>
      <input type="email" class="form-control" name="email"><br/>
      <span>Пароль</span>
      <input type="password" class="form-control" name="pass"><br/>
      <button class="btn btn-primary">Войти</button>
      <button class="btn btn-primary">Регистрация</button>
      <?php
        echo "<br/>" . $_SESSION["fail"];
        unset($_SESSION["fail"]);
      ?>
    </form>
  </div>
</section>