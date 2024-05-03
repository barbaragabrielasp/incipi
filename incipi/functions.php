<?php
    function check_login($mysqli) {
        if(isset($_SESSION['userid'])) {
            $id = $_SESSION['userid'];
            $query = "select * from users where userid = '$id' limit 1";
            $result = mysqli_query($mysqli, $query);

            if($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        // redireciona para a página de login
        header("Location: login.php");
        die;
    }

    function get_projects($mysqli) {
        // pega informações dos projetos diretamente do banco de dados
        $query = "select * from projects";
        $result = mysqli_query($mysqli, $query);
        $projects = array();
        if($result) {
            while($row = mysqli_fetch_assoc($result)) {
                $projects[] = $row;
            }
        }
        return $projects;
        die;
    }

    function random_num($length) {
        $text = "";
        if($length < 5) {
            $length = 5;
        }
        $len = rand(4, $length);
        for($i = 0; $i < $len; $i++) {
            $text .= rand(0, 9);
        }
        return $text;
    }

    //verifica se usuário tem rank "admin"
    function is_admin($mysqli) {
        $user_data = check_login($mysqli);
        if ($user_data['rank'] == 'admin') {
            return true;
        }
        return false;
    }
?>