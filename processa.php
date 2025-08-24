<?php
$genero = $_POST['genero'];
$plataforma = $_POST['plataforma'];
$estilo = $_POST['estilo'];
$modo = $_POST['modo'];

$jogo = "Não encontrado";

if ($genero == "fps" && $plataforma == "pc" && $estilo == "competitivo" && $modo == "online") {
    $jogo = "Valorant";
}
elseif ($genero == "fps" && $plataforma == "console" && $estilo == "competitivo" && $modo == "online") {
    $jogo = "Call Of Duty";
}
elseif ($genero == "rpg" && $plataforma == "console" && $estilo == "casual" && $modo == "offline") {
    $jogo = "The Witcher 3";
}
elseif ($genero == "esporte" && $plataforma == "console" && $estilo == "competitivo" && $modo == "online") {
    $jogo = "EA FC 25";
}
elseif ($genero == "estrategia" && $plataforma == "pc" && $estilo == "casual" && $modo == "offline") {
    $jogo = "Civilization VI";
}
elseif ($genero == "estrategia" && $plataforma == "mobile" && $estilo == "casual" && $modo == "online") {
    $jogo = "Clash Of Clans";
}
elseif ($genero == "aventura" && $plataforma == "console" && $estilo == "casual" && $modo == "offline") {
    $jogo = "Indiana Jones";
}
elseif ($genero == "acao" && $plataforma == "console" && $estilo == "competitivo" && $modo == "online") {
    $jogo = "Mortal Kombat";
}
elseif ($genero == "acao" && $plataforma == "console" && $estilo == "casual" && $modo == "offline") {
    $jogo = "Red Dead Redemption";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container resultado">
        <h1>Resultado:</h1>
        <p>O jogo recomendado para você é:</p>
        <h2><?= $jogo ?></h2>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
