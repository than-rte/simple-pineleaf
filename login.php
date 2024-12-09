<html>

<head>
  <title>Pine'Leaf | Login</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/all.css" />
  <link rel="stylesheet" href="css/guest.css" />
</head>

<body class="page">
  <div class="circle"></div>
  <header class="header header-login">
    <a href="/home.php">
      <img class="brand-logo" src="/imgs/brand.png" alt="Brand Logo" />
    </a>
  </header>
  <section class="card-layout">
    <div class="card-login-out">
      <div class="card-login-in">
        <h1 class="card-title">
          Login
        </h1>
        <form class="form-login " action="">
          <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" name="" id="">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="" id="pw">
            <div class="input-show-pw">
              <input type="checkbox" name="" id="show-pw">
              <label for="Show Password">Show Password</label>
            </div>
          </div>
          <div class="form-submit">
            <a href="/register.php">Not registered yet? <span>Register here</span></a>
            <button class="btn-login" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script>
    const pw = document.getElementById('pw');
    const spw = document.getElementById('show-pw');
    spw.addEventListener('change', function() {
      if (pw.type === 'password') {
        pw.type = 'text';
      } else {
        pw.type = 'password';
      }
    })
  </script>
</body>

</html>