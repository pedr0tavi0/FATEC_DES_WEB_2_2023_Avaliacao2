<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
</head>
<body>
    <form action="Conexao.php" method="post">
        <label for="nome"> nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        
        <label for="rg">rg:</label>
        <input type="text" id="rg" name="rg"><br><br>
        
        <label for="telefone">telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>
        
        <select name="escola" id="escola">
         <option value="Publica">Publica</option>
         <option value="Particular">Particular</option>
        </select>
       
       
        <button type="submit" value="Enviar">Cadastrar</button>
        <input type="submit" value="Enviar"><br>
        <br>
       
        <br>
        <div class="form-group">
            <a href="apagar.php" class="btn btn-danger">Apagar candidatos</a><br>
        </div>
    </form>
    </form>
</body>
</html>
