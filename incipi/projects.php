<?php
    session_start();
    
    include('connect.php');
    include('functions.php');

    $projects_data = get_projects($mysqli);
    $user_data = check_login($mysqli);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>
</head>
<body>
    <!-- cabeçalho com logo da incipi, perfil e logout -->
    <header>
        <div>
            <img src="logo.png" alt="logo" width="30%">
            <!-- opção "admin" só aparece para usuários com rank "admin" -->
            <?php if ($user_data['rank'] == 'admin') { ?>
                <a href="admin.php">Admin</a>
            <?php } ?>
            <a href="profile.php">Perfil</a>
            <a href="logout.php">Sair</a>
        </div>
    </header>
    <!-- botão para criar um novo projeto -->
    <a href="new_project.php">Criar novo projeto</a>
    <!-- mostra as informações de cada projeto com status "aprovado"  -->
    <div>
        <?php
            foreach($projects_data as $project) {
                // verifica o status do projeto
                if ($project['status'] == 'aprovado') {
                    echo $project['name'] . '<br>';
                    echo $project['description'] . '<br><br>';
                    // botão para ver o projeto
                    echo '<form action="project_page.php" method="post">
                            <input type="hidden" name="project_id" value="' . $project['id'] . '">
                            <input type="submit" value="Ver projeto">
                        </form>';                       
                }
            }
        ?>
    </div>
    <!-- rodapé com o símbolo de copyright, nome da incipi e o ano -->
    <footer>
        <div>
            <p>© 2023 inCIPI</p>
        </div>
    </footer>
</body>
</html>