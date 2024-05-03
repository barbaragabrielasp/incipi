<!-- quando um administrador aprova um projeto, o status do projeto é alterado para "aprovado" -->
<?php
    session_start();
    
    include('connect.php');
    include('functions.php');

    $user_data = check_login($mysqli);

    if (isset($_POST['project_id'])) {
        $project_id = $_POST['project_id'];
        $query = "UPDATE projects SET status = 'aprovado' WHERE id = '$project_id'";
        $result = mysqli_query($mysqli, $query);
        if ($result) {
            header("Location: admin.php");
        }
    }
?>