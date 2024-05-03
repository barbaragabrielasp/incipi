<!-- página de registro -->
<?php
    session_start();

    // conexão com o banco de dados
    include('connect.php');
    include('functions.php');

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // inputs no formulário
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if(!empty($name) && !empty($email) && !empty($password) && !is_numeric($email)) {
            // salvar na database
            $userid = random_num(20);
            $query = "insert into users (userid, name, email, password) values ('$userid', '$name', '$email', '$password')";
            mysqli_query($mysqli, $query);
            header("Location: login.php"); // redireciona para a página de login
            
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
    <title>Nova conta</title>
</head>
<body>
    <!-- formulário com nome, email, e senha -->
    <form method="post">
        <input type="text" name="name" id="name" placeholder="Nome" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Senha" required>
        <input type="submit" value="Criar conta">
        <a href="login.php">Já tenho uma conta</a>
    </form>
    <!-- rodapé com o símbolo de copyright, nome da incipi e o ano -->
    <footer>
        <div>
            <p>© 2023 inCIPI</p>
        </div>
    </footer>
</body>
</html>