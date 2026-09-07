<!DOCTYPE html>
<html>
    <head>
    <title>Inscrição | English School</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <main class="page-shell">
      <section class="intro">
        <span class="eyebrow">ENGLISH SCHOOL</span>
        <h1>Seu próximo passo começa aqui.</h1>
        <p>Aprenda inglês com aulas práticas, leves e pensadas para a sua rotina.</p>
        <div class="intro-note">Inscrições abertas para novas turmas</div>
      </section>

      <section class="form-card">
        <div class="form-heading">

          <div>
            <h2>Faça sua inscrição</h2>
            <p>Preencha seus dados para receber mais informações.</p>
          </div>
        </div>

        <form action="retorno.php" method="post">
          <div class="form-grid">
            <div class="field">
              <label for="nome">Primeiro nome</label>
              <input type="text" id="nome" placeholder="Digite seu nome" name="firsnome" required>
            </div>
            <div class="field">
              <label for="sobrenome">Sobrenome</label>
              <input type="text" id="sobrenome" placeholder="Digite seu sobrenome" name="sobrenome">
            </div>
          </div>

          <div class="field">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="voce@email.com" required>
          </div>

          <div class="field">
            <label for="contato">Telefone</label>
            <input type="tel" id="contato" name="contato" placeholder="(49) 99945-3321">
          </div>

          <div class="field">
            <label for="horario">Melhor horário para estudar</label>
            <select id="horario" name="horario">
              <option value="">Selecione um horário</option>
              <option value="matutino">Matutino - 08h30 às 11h30</option>
              <option value="vespertino">Vespertino - 13h30 às 16h30</option>
              <option value="noturno">Noturno - 17h30 às 20h30</option>
            </select>
          </div>

          <fieldset class="field radio-field">
            <legend>Como você se identifica?</legend>
            <label><input type="radio" name="sexo" value="feminino"> Feminino</label>
            <label><input type="radio" name="sexo" value="masculino"> Masculino</label>
          </fieldset>

          <button type="submit">Quero me inscrever <span aria-hidden="true">→</span></button>
        </form>
      </section>
    </main>
    </body> 
</html>