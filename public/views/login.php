<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->render('head');?>
  <link href="public/css/login.css" rel="stylesheet" />
</head>
<body>
  <img class="login-page-image" src="public/images/login-aside.jpg" />
  <section class="login-page-container">
    <header class="header">
      <img class="logo" src="public/images/logo.svg" />
      <h2>Exceptional coffee community!</h2>
    </header>
    <div class="form-container">
      <form class="form" action="/login" method="POST">
        <div class="input-container">
          <label>Email</label>
          <input name="email" type="email" placeholder="Enter email"/>
        </div>
        <div class="input-container">
          <label>Password</label>
          <input name="password" type="password" placeholder="Enter password"/>
        </div>
        <button class="button">Log In</button>
      </form>
    </div>
    <?php if ($messages): ?>
        <span class="error-message"><?= $messages[0];?></span>
    <?php endif; ?>
    <span class="register-link">Don’t have an account? <a href="/register">Sign Up</a></span>
  </section>
  </body>
</html>