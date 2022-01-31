<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->render('head');?>
  <link href="public/css/login.css" rel="stylesheet" />
</head>
<body>
  <img class="login-page-image" src="public/images/register.jpeg" />
  <section class="login-page-container">
    <header class="header">
      <h2>Join our community of coffee lovers!</h2>
    </header>
    <div class="form-container">
      <form class="form" action="register" method="POST">
        <div class="input-container">
          <label>Name</label>
          <input name="name" type="text" required placeholder="Enter name"/>
        </div>
        <div class="input-container">
          <label>Surname</label>
          <input name="surname" type="text" required placeholder="Enter surname"/>
        </div>
        <div class="input-container">
          <label>Email</label>
          <input name="email" type="email" required placeholder="Enter email"/>
        </div>
        <div class="input-container">
          <label>Password</label>
          <input name="password" type="password" required placeholder="Enter password" onChange="onChange()"/>
        </div>
        <div class="input-container">
          <label>Repeat Password</label>
          <input name="confirm-password" type="password" required placeholder="Repeat password" onChange="onChange()"/>
        </div>
        <button class="button">Sign Up</button>
        <?php if ($messages): ?>
          <span class="error-message"><?= $messages[0];?></span>
        <?php endif; ?>
      </form>
    </div>
  </section>
  </body>
</html>