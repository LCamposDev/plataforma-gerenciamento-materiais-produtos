<?php
session_start();
session_destroy();
header("location: html/login.html"); // Redirecionar de volta para a página de login após fazer logout.
?>