<?php include('server.php') ?>
<style>
a {
  color:white;
  float:right;
}
a:visited {
  color: var(--third-color);
}
</style>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="/src/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
  </head>
<body>
  <div class="vertical-center container">
    <div class="header" style="text-align: center;">
      <img src="/assets/icons/gorilla.svg" alt="" class="img-fluid" style="width:150px;margin:0 auto;">
    </div>
     <form method="post" action="login.php" class="user-form mt40">
       <?php include('errors.php'); ?>
       <div class="input-group">
         <input type="text" name="username" placeholder="Username">
       </div>
       <div class="input-group">
         <input type="password" name="password" placeholder="Password">
       </div>
       <div class="input-group" style="text-align:center;">
         <button type="submit" class="go" name="login_user" style="margin:0 auto;width:230px;cursor:pointer;font-size:14px;">Login</button>
       </div>
       <p>
         <a href="register.php">Register</a>
       </p>
     </form>
   </div>
</body>
</html>