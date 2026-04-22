<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Latihan PHP</title>

<style>
body{
  font-family: Poppins, sans-serif;
  background:#f5eee6;
  padding:40px;
  color:#4b3621;
}

.box{
  background:linear-gradient(135deg,#4b3621,#8b6b4f);
  color:white;
  padding:30px;
  border-radius:12px;
  width:300px;
}
</style>

</head>
<body>

<h2>Latihan Perulangan PHP</h2>

<div class="box">
<?php
for ($i = 1; $i <= 1000; $i++) {
  echo "$i. Ini adalah hari ke-$i belajar PHP <br>";
}
?>
</div>

</body>
</html>
