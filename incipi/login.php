<!-- página de login -->
<?php
    session_start();
    
    include('connect.php');
    include('functions.php');

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // algo foi postado
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email)) {
            // leia do banco de dados
            $query = "select * from users where email = '$email' limit 1";
            $result = mysqli_query($mysqli, $query);
            
            if($result) {
                if(mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password) {
                        $_SESSION['userid'] = $user_data['userid'];
                        header("Location: profile.php");
                        die;
                    }
                }
            }

            echo "Email ou senha incorreta!";
        } else {
            echo "Email ou senha incorreta!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer login</title>
</head>
<body>
    <!-- formulário com email e senha -->
    <form method="post">
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Senha" required>
        <input type="submit" value="Entrar">
        <a href="register.php">Criar uma conta</a>
    </form>

    <!-- rodapé com o símbolo de copyright, nome da incipi e o ano -->
    <footer>
        <div>
            <p>© 2023 inCIPI</p>
        </div>
    </footer>
</body>
</html>