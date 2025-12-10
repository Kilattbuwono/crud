<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">

  <style>
    body{
      background-image: url('assets/image/bg.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
      position: relative;
    }
    /* overlay biar teks/card kebaca */
    body::before{
      content:"";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.35);
    }
    .login-card{
      position: relative; /* biar gak ketutup overlay */
      backdrop-filter: blur(6px);
      background: rgba(255,255,255,0.95);
      border-radius: 12px;
    }
  </style>
</head>

<body>
  <div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="card login-card shadow-lg p-4" style="width:100%; max-width:400px;">
      
      <h3 class="text-center text-primary mb-4 fw-bold">Login Page</h3>

      <form action="login/proses_login.php" method="post">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</body>
</html>