<!-- informações do usuário, onde apenas pessoas logadas podem acessar -->
<?php
    session_start();
    
    include('connect.php');
    include('functions.php');

    $user_data = check_login($mysqli);

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // inputs no formulário
        $name = $_POST['name'];
        $description = $_POST['description'];
        $admin = $user_data['id'];

        if(!empty($name) && !empty($description)) {
            // salvar na database
            $projectid = random_num(20);
            $query = "insert into projects (projectid, name, description, admin) values ('$projectid', '$name', '$description', $admin)";
            mysqli_query($mysqli, $query);
            header("Location: projects.php"); // redireciona para a página de projetos
            
            die;
        } else {
            echo "Por favor, preencha todos os campos";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo projeto</title>
</head>
<body>
    <!-- cabeçalho com logo da incipi, projetos e logout -->
    <header>
        <div>
            <img src="logo.png" alt="logo" width="30%">
            <a href="projects.php">Projetos</a>
            <a href="logout.php">Sair</a>
        </div>
    </header>
    <!-- formulário para criar um novo projeto -->
    <main>    
        <form action="new_project.php" method="post">
        <input type="text" name="name" placeholder="Nome do projeto">
        <input type="text" name="description" placeholder="Descrição do projeto">
        <input type="submit" value="Criar">
        </form>
    </main>
    <!-- rodapé com o símbolo de copyright, nome da incipi e o ano -->
    <footer>
        <div>
            <p>© 2023 inCIPI</p>
        </div>
    </footer>
</body>
</html>