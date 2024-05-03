<!-- página acessível apenas para usuários com rank "admin" -->
<?php
    session_start();
    
    include('connect.php');
    include('functions.php');

    $user_data = check_login($mysqli);
    $projects_data = get_projects($mysqli);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <!-- cabeçalho com logo da incipi, projetos, perfil e logout -->
    <header>
        <div>
            <img src="logo.png" alt="logo" width="30%">
            <a href="projects.php">Projetos</a>
            <a href="profile.php">Perfil</a>
            <a href="logout.php">Sair</a>
        </div>
    </header>
    <!-- mostra projetos recém criados com tag "a verificar" -->
    <div>
        <?php
            foreach($projects_data as $project) {
                // verifica o status do projeto
                if ($project['status'] == 'a verificar') {
                    echo $project['name'] . '<br>';
                    echo $project['description'] . '<br><br>';
                    // mostra o id do usuário que criou o projeto em "admin"
                    echo 'Criado por: ' . $project['admin'] . '<br><br>';
                    // botão para aprovar o projeto
                    echo '<form action="approve_project.php" method="post">
                            <input type="hidden" name="project_id" value="' . $project['id'] . '">
                            <input type="submit" value="Aprovar">
                        </form>';
                        // quando botão é clicado, o projeto é aprovado e o status é alterado para "aprovado"

                    // botão para rejeitar o projeto
                    echo '<form action="reject_project.php" method="post">
                            <input type="hidden" name="project_id" value="' . $project['id'] . '">
                            <input type="submit" value="Rejeitar">
                        </form>';
                        // quando botão é clicado, o projeto é rejeitado e o status é alterado para "rejeitado"

                }
            }
        ?>
    </div>
</body>
</html>