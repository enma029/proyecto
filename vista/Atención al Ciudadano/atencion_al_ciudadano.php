<?php 
    session_start();

    if (!isset($_SESSION['usuario_id']) || ($_SESSION['usuario_id'] != 2 && $_SESSION['usuario_id'] != 1)) {
    header('Location: ../../index.php'); // Lo bota al login
    exit();
}
?>
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministerio del Poder Popular para el Hábitat y La Vivienda – MINHVI</title>
    <link rel="stylesheet" href="/fuente/fonts.css">
    <link rel="stylesheet" href="../../php/menu/main/style_main.css">
    <link rel="stylesheet" href="../../php/menu/style.css">
</head>
    <body>
    <?php 
    include_once'../../php/menu/menu.php';
    include_once'../../php/menu/main/main.php';
    ?>
</body>
</html>