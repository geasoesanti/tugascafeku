<!DOCTYPE html>
<html lang="id">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>

    <style>
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        }

        html, body {
        height: 100%;
        }

        body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: radial-gradient(circle at top left, #2e4d3f, #16332b 70%);
        }

        .login-box {
        width: 360px;
        padding: 20px;
        }

        .login-box h1 {
        color: #f3ead3;
        font-size: 28px;
        letter-spacing: 2px;
        margin-bottom: 32px;
        text-align: center;
        }

        .input-group {
        position: relative;
        margin-bottom: 20px;
        }

        .input-group input {
        width: 100%;
        padding: 16px 56px 16px 56px;
        border: none;
        border-radius: 30px;
        background: rgba(243, 234, 211, 0.12);
        color: #f3ead3;
        font-size: 15px;
        outline: none;
        }

        .input-group input::placeholder {
        color: rgba(243, 234, 211, 0.6);
        }

        .icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #f3ead3;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        }

        .icon.left {
        left: 6px;
        }

        .icon.right {
        right: 6px;
        }

        button {
        width: 100%;
        padding: 16px;
        margin-top: 12px;
        border: none;
        border-radius: 30px;
        background: #f3ead3;
        color: #16332b;
        font-size: 15px;
        font-weight: bold;
        letter-spacing: 1px;
        cursor: pointer;
        }

        button:hover {
        background: #e5d9b8;
        }
    </style>

    </head>
<body>

  <div class="login-box">
    <h1>Roast & Co.</h1>

    <form action="api/Pengguna/ceklogin.php" method="POST">
      <div class="input-group">
        <span class="icon left">👤</span>
        <input name="username" type="text" placeholder="Username" required />
      </div>

      <div class="input-group">
        <input name= "password" type="password" placeholder="Password" required />
        <span class="icon right">🔒</span>
      </div>

      <button type="submit">LOGIN</button>
    </form>
  </div>

</body>
</html>