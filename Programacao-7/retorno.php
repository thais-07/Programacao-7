<?php
$nome = $_POST['firsnome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$contato = $_POST['contato'];
$horario = $_POST['horario'];
$sexo = $_POST['sexo'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inscrição recebida | English School</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main class="page-shell result-shell">
            <section class="result-card">
                <span class="success-icon" aria-hidden="true">✓</span>
                <span class="eyebrow">ENGLISH SCHOOL</span>
                <h1>Inscrição recebida!</h1>
                <p class="result-lead">Obrigado, <?php echo htmlspecialchars($nome); ?>. Confira os dados enviados:</p>
                <div class="details">
                    <p><strong>Nome:</strong><?php echo htmlspecialchars($nome  . ' ' . $sobrenome); ?></p>
                    <p><strong>E-mail:</strong><?php echo htmlspecialchars($email); ?></p>
                    <p><strong>Telefone:</strong><?php echo htmlspecialchars($contato); ?></p>
                    <p><strong>Horário:</strong><?php echo htmlspecialchars($horario); ?></p>
                    <p><strong>Perfil:</strong><?php echo htmlspecialchars($sexo); ?></p>
                </div>
                <a class="back-link" href="index2.php">← Voltar para o formulário</a>
            </section>
        </main>
    </body>
</html>