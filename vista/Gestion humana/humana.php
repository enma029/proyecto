<?php 
    session_start();

    if (!isset($_SESSION['usuario_id']) || ($_SESSION['usuario_id'] != 5 && $_SESSION['usuario_id'] != 1)) {
    header('Location: ../../index.php'); // Lo bota al login
    exit();
}
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../php/menu/style.css">
    <link rel="stylesheet" href="../../php/menu/main/style_main.css">
</head>
<body>
    
</body>
</html>
<body>
    <?php 
    include_once'../../php/menu/menu.php';
    include_once'../../php/menu/main/main.php';
    ?>
</body>