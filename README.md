# 🎮 Sistema Recomendador de Jogos

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

Um sistema simples que ajuda usuários a encontrarem jogos de acordo com suas preferências pessoais, utilizando regras implementadas em PHP.

---

## 📝 Variáveis de Entrada
O sistema considera quatro variáveis principais para recomendar o jogo ideal:

- **🎮 Gênero:** Ação, Aventura, FPS, Estratégia, RPG, Esporte  
- **🖥 Plataforma:** PC, Console ou Mobile  
- **⚡ Estilo de jogo:** Competitivo ou Casual  
- **🌐 Modo:** Online ou Offline  

---

## 🎯 Variável de Saída
- **🏆 Jogo:** A recomendação final gerada pelo sistema, baseada nas escolhas do usuário.

---

## ⚙️ Como Funciona
O sistema utiliza **estruturas condicionais (`if/else`) em PHP** para determinar a recomendação de acordo com as variáveis fornecidas.

**Exemplo de regra:**
```php
if ($genero == "FPS" && $plataforma == "PC" && $estilo == "Competitivo" && $modo == "Online") {
    $jogo = "Valorant";
}
