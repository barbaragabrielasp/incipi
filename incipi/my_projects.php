<!-- mostra de acordo com o id do usuário os projetos que ele está participando -->
<?php
    session_start();
    
    include('connect.php');
    include('functions.php');

    $user_data = check_login($mysqli);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- cabeçalho com logo da incipi, projetos, perfil e logout -->
    <header>
        <div>
            <img src="logo.png" alt="logo" width="30%">
            <a href="projects.php">Projetos</a>
            <!-- opção "admin" só aparece para usuários com rank "admin" -->
            <?php if ($user_data['rank'] == 'admin') { ?>
                <a href="admin.php">Admin</a>
            <?php } ?>
            <a href="profile.php">Perfil</a>
            <a href="logout.php">Sair</a>
        </div>
    </header>
    <!-- rodapé com o símbolo de copyright, nome da incipi e o ano -->
    <footer>
        <div>
            <p>© 2023 inCIPI</p>
        </div>
    </footer>
</body>
</html>