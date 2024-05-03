<!-- quando um usuário é deslogado, ele é redirecionado para a index.php -->
<?php
    session_start();

    if(isset($_SESSION['userid'])) {
        unset($_SESSION['userid']);
    }

    header("Location: index.php");
?>