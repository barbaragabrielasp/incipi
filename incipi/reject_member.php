<!-- rejeita um membro -->
<?php
    session_start();
    
    include('connect.php');
    include('functions.php');

    $user_data = check_login($mysqli);

    if (isset($_POST['project_id'])) {
        $project_id = $_POST['project_id'];
        $user_id = $_POST['user_id'];
        $query = "UPDATE projects SET pending_members = REPLACE(pending_members, '$user_id,', '') WHERE id = '$project_id'";
        $result = mysqli_query($mysqli, $query);
        if ($result) {
            header("Location: projects.php");
        }
    }
?>