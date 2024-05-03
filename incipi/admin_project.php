<!-- o usuário que criou o projeto pode aceitar ou recusar a solicitação de participação -->
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
    <title>Gerenciar Projeto</title>
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
    <!-- mostra os pending_members -->
    <div>
        <h1>Participantes Pendentes</h1>
        <?php
            
        ?>
        <!-- aceita participação -->
        <form action="accept_member.php" method="post">
            <input type="hidden" name="project_id" value="<?php echo $project_data['id']; ?>">
            <input type="submit" value="Aceitar">
        </form>
        <!-- recusa participação -->
        <form action="reject_member.php" method="post">
            <input type="hidden" name="project_id" value="<?php echo $project_data['id']; ?>">
            <input type="submit" value="Recusar">
        </form>
    </div>
</body>
</html>