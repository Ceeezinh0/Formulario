<!--OBS, Já tinha o esboço do código, foi realizado para o nosso tcc, e como base para as atividades propostas durante a aula, que utilize de alguma forma formulário, ligado ao bando de dados mysql, então o fórmulario está bem desenvolvido para que eu consiga adaptar em qualquer situação, e o código de css tambem -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    header("Location: confirmacao.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Maratona de Programação</title>
</head>
<body>
    <header>
        <h1>Maratona de Programação</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inscrição</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>O que é a Maratona de Programação?</h2>
            <p>A Maratona de Programação é uma competição de programação em equipe que desafia estudantes a resolverem problemas complexos em um curto período de tempo.</p>
        </section>
        <section>
            <h2>Por que participar?</h2>
            <p>Participar da Maratona de Programação é uma excelente maneira de aprimorar suas habilidades de programação, trabalhar em equipe e enfrentar desafios emocionantes.</p>
        </section>
        <section class="formulario-com-imagem">
            <div class="imagem">
                <img src="Imagem_maratona.jpeg" alt="Imagem da maratona de programação">
            </div>
            <div class="formulario">
                <h2>Formulário de Inscrição</h2>
                <form method="post" action="confirmacao.php"> 
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                    <br>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="instituicao">Instituição:</label>
                    <input type="text" id="instituicao" name="instituicao" required>
                    <br>
                    <label for="curso">Curso:</label>
                    <input type="text" id="curso" name="curso" required>
                    <br>
                    <label for="ano">Ano de Ingresso:</label>
                    <input type="number" id="ano" name="ano" required>
                    <br>
                    <input type="submit" value="Inscrever-se">
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>Ano que vem, vou para o Nacional!!</p> 
    </footer>
</body>
</html>
