<?php include('server.php') ?>
<style>
  a {
    color: white;
    float: right;
  }

  a:visited {
    color: var(--third-color);
  }
</style>
<!DOCTYPE html>
<html>

<head>
  <title>Registration</title>
  <link rel="stylesheet" href="/src/style.css">
</head>

<body>
  <div class="vertical-center container">
    <div class="header" style="text-align: center;">
      <img src="/assets/icons/gorilla.svg" alt="" class="img-fluid" style="width:150px;margin:0 auto;">
    </div>
    <form method="post" action="register.php" class="user-form mt40">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
      </div>
      <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
      </div>
      <div class="input-group" style="text-align:center;">
        <button type="submit" class="go" name="reg_user"  style="margin:0 auto;width:230px;cursor:pointer;font-size:14px;">Register</button>
      </div>
      <p>
        <a href="login.php">Sign in</a>
      </p>
    </form>
  </div>
</body>

</html>