<!DOCTYPE html>
<html>
    <head>
        <title>Curriculo</title>
    </head>
    <body>
        <h1>Envie seu curriculo</h1>
        <div class="container mt-3">
          <form action="retorno.php" method="post">
            <label for="usr">Usuárioo</label>
            <input type="text" placeholder="Digite o usr" name="usr" class="form-control" required>
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="pwd" placeholder="Entre com senha" name="senha">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
            <label for="campus">Campus</label>
            <select name="campus">
              <option>Selecione</option>
              <option value="chapeco">Chapecó</option>
              <option value="floripa">Florianópolis</option>
            </select>
           <label for="sexo">Sexo</label>
            <input type="radio" name="sexo" value="feminino">Feminino
            <input type="radio" name="sexo" value="masculino">Masculino
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="lembre"> Remember me
                </label>
                </div>
          
          </form>
        </div>
    </body> 
</html>