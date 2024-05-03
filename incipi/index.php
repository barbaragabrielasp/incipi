<!-- primeira página do site, onde todos têm acesso -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inCIPI</title>
</head>
<body>
    <!-- cabeçalho com logo da incipi e login/registro -->
    <header>
        <div>
            <img src="logo.png" alt="logo incipi" width="30%">
            <a href="login.php">Entrar</a>
            <a href="register.php">Registrar</a>
        </div>
    </header>
    <main>
        <!-- banner com um pequeno texto sobre o site, um botão de "Começar" que redireciona para a página de registro e uma imagem ilustrativa de lado -->
        <div>
            <h1>inCIPI</h1>
            <p>Transformando seus projetos em realidade.</p>
            <a href="register.php">Começar</a>
            <img src="banner.png" alt="banner">
        </div>
        <!-- área para mais informações sobre o site -->
        <div>
            <h2>Como funciona?</h2>
            <p>inCIPI é um site que conecta pessoas que querem desenvolver projetos com pessoas que querem ajudar a desenvolver projetos. Você pode criar um projeto e encontrar pessoas para ajudar a desenvolvê-lo ou você pode se inscrever em um projeto existente e ajudar a desenvolvê-lo.</p>
        </div>
        <!-- área para mostrar alguns projetos -->
        <div>
            <h2>Alguns de nossos projetos</h2>
            <div>
                <img src="project.png" alt="projeto">
                <h3>Robótica na Escola</h3>
                <p>Projeto em parceria com a Arcelormittal que busca desenvolver kits de robótica para serem utilizados em escolas.</p>
            </div>
            <div>
                <img src="project.png" alt="projeto">
                <h3>Realidade Virtual e Aumentada</h3>
                <p>Auxiliação no desenvolvimento das aulas de virtualização de processos e desenvolvimento de automação dentro do campo da realidade virtual.</p>
            </div>
            <div>
                <img src="project.png" alt="projeto">
                <h3>Smart Campus</h3>
                <p>Identificação de problemas na PUC Coração Eucarístico e possíveis soluções utilizando conceitos de Smart Cities.</p>
            </div>
        </div>
    </main>
    <!-- rodapé com o símbolo de copyright, nome da incipi e o ano -->
    <footer>
        <div>
            <p>© 2023 inCIPI</p>
        </div>
    </footer>
</body>
</html>