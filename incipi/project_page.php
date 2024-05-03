<!-- mostra informações do projeto de acordo com o id -->
<?php
    session_start();
    
    include('connect.php');
    include('functions.php');

    $user_data = check_login($mysqli);

    if (isset($_POST['project_id'])) {
        $project_id = $_POST['project_id'];
        $query = "select * from projects where id = '$project_id'";
        $result = mysqli_query($mysqli, $query);
        $project_data = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Projeto</title>
</head>
<body>
    <!-- cabeçalho com logo da incipi, projetos e logout -->
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
    <!-- informações do projeto -->
    <div>
        <h1><?php echo $project_data['name']; ?></h1>
        <p><?php echo $project_data['description']; ?></p>
        <p><?php echo $project_data['status']; ?></p>
        <!-- mostra os membros -->
        <p><?php echo $project_data['members']; ?></p>
    </div>
</body>
</html>