<?php
session_start();
if (!isset($_SESSION['aluno_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Área do Aluno</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  
</head>
<body>

<?php include '../partials/header.php'; ?> <!-- Header com logo -->

<div class="container">
  <h1>Bem-vindo à Área do Aluno</h1>
  <div class="aluno-buttons">
    <button type="button" onclick="location.href='plano.php'">Verificar/Escolher Plano</button>
    <button type="button" onclick="location.href='painel_treinos.php'">Consultar Treino</button>
    <button type="button" onclick="location.href='editar_perfil.php'">Editar Perfil</button>
    <button type="button" onclick="location.href='/projeto/public/logout.php'">Logout</button>
  </div>
</div>


</body>
</html>
