<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Nazwa's Library Corner</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #8B5E3C, #C19A6B);
    display: flex;
    justify-content: center;
    align-items: center; 
    min-height: 100vh;
}

.box{
  background:white;
  padding:40px;
  width:480px;
  border-radius:15px;
  box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.box h2{
  text-align:center;
  margin-bottom:25px;
  color:#5C4033;
}

.form-container{
  width:320px;
  margin:0 auto;
}

.form-container input{
  width:100%;
  padding:10px;
  margin-bottom:15px;
  border-radius:8px;
  border:1px solid #ccc;
  font-size:14px;
}

.checkbox-group{
  display:flex;
  align-items:center;
  margin-bottom:15px;
  font-size:14px;
}

.checkbox-group input{
  width:auto;
  margin-right:5px;
}

.checkbox-group label{
  position:relative;
  top:-2px;
}

/* Tombol Masuk */
.form-container button{
  width:100%;
  padding:10px;
  background-color:#8B5E3C;
  color:white;
  border:none;
  border-radius:8px;
  font-size:14px;
  cursor:pointer;
  margin-bottom:15px;
}

.form-container button:hover{
  background-color:#6F4E37;
}

.register-link{
  text-align:center;
  font-size:14px;
}

.register-link a{
  color:#8B5E3C;
  font-weight:bold;
  text-decoration:none;
}

.register-link a:hover{
  color:#6F4E37;
}
</style>
</head>

<body>

<div class="box">
  <h2>Login</h2>

  <p style="font-size:14px; margin-bottom:20px; text-align:center;">
    Masuk untuk mengakses Nazwa’s Library Corner dan melanjutkan eksplorasi pengetahuan.
  </p>

  <div class="form-container">
<div class="form-container">

<form action="proses_login.php" method="POST">

  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">

  <div class="checkbox-group">
    <input type="checkbox">
    <label>Remember Me</label>
  </div>

  <button type="submit">Masuk</button>

</form>

<div class="register-link">
  Belum punya akun? <a href="register.html">Daftar</a>
</div>

</div>

  </div>
</div>


</body>
</html>
