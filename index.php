<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Especialista - Recomendador de Jogos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Recomendador de Jogos</h1>
        <form action="processa.php" method="POST">
            <label>Qual gênero você prefere?</label>
            <select name="genero" required>
                <option value="acao">Ação</option>
                <option value="aventura">Aventura</option>
                <option value="fps">FPS</option>
                <option value="estrategia">Estratégia</option>
                <option value="rpg">RPG</option>
                <option value="esporte">Esporte</option>
            </select>

            <label>Em qual plataforma você quer jogar?</label>
            <select name="plataforma" required>
                <option value="pc">PC</option>
                <option value="console">Console</option>
                <option value="mobile">Mobile</option>
            </select>

            <label>Prefere um jogo competitivo ou casual?</label>
            <select name="estilo" required>
                <option value="competitivo">Competitivo</option>
                <option value="casual">Casual</option>
            </select>

            <label>Quer jogar online ou offline?</label>
            <select name="modo" required>
                <option value="online">Online</option>
                <option value="offline">Offline</option>
            </select>

            <button type="submit">Recomendar Jogo</button>
        </form>
    </div>
</body>
</html>
