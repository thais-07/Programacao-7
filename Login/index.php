<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1> Mandar Curriculo</h1>
        <div class="container mt-3">
          <form action="retorno.php" method="post">
            <label for="usr">Usuário</label>
            <input type="text" placeholder="Digite o usr" name="usr" class="form-control" required>
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="pwd" placeholder="Entre com senha" name="senha">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
            <label for="escolaridade">Escolaridade:</label>
            <select name="escolaridade">
              <option>Selecione</option>
              <option value="medioC">Ensino Médio Completo</option>
              <option value="medioI">Ensino Médio Incompleto</option>
              <option value="fundamentalC">Ensino Fundamental Completo</option>
              <option value="fundamentalI">Ensino Fundamental Incompleto</option>
              <option value="superior">Ensino Superior</option>
            </select>
           <label for="sexo">Sexo</label>
            <input type="radio" name="sexo" value="feminino">Feminino
            <input type="radio" name="sexo" value="masculino">Masculino
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="lembre"> Remember me
                </label>
                </div>
            <input type="submit">
          </form>
        </div>
    </body> 
</html>