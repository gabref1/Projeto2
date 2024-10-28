<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h2>Formulário de Cadastro</h2>
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
        <br><br>

        <label for="salario">Salário:</label>
        <input type="number" id="salario" name="salario" step="0.01" required>
        <br><br>

        <label>Sexo:</label>
        <input type="radio" name="sexo" value="Masculino" required>
        <label>Masculino</label>
        <input type="radio" name="sexo" value="Feminino">
        <label>Feminino</label>
        <input type="radio" name="sexo" value="Prefiro não dizer">
        <label>Prefiro não dizer</label>
        <br><br>

        <label for="cargo">Cargo:</label>
        <select id="cargo" name="cargo" required>
            <option value="">Selecione</option>
            <option value="Analista de TI">Analista de TI</option>
            <option value="Gestor de TI">Gestor de TI</option>
            <option value="Desenvolvedor Frontend">Desenvolvedor Frontend</option>
            <option value="Desenvolvedor Backend">Desenvolvedor Backend</option>
            <option value="Desenvolvedor FullStack">Desenvolvedor FullStack</option>
        </select>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>