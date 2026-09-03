<?php
$usr = $_POST['usr'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$campus = $_POST['campus'];
$sexo = $_POST['sexo'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <h1>Acesso restrito</h1>
        <p>Usuário: <?php echo $usr; ?></p>
        <p>Senha:   <?php echo $senha; ?></p> 
        <p>email:   <?php echo $email; ?></p>
        <p>campus:   <?php echo $campus; ?></p>
        <p>sexo:      <?php echo $sexo; ?></p>       
    </body>
</html>