<?php
session_start();
if (isset($_SESSION['aluno_id'])) {
    header("Location: projeto/views/aluno/area_aluno.php");
    exit();
} else {
    header("Location: projeto/views/aluno/login.php");
    exit();
}
?>