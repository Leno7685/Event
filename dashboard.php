<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
require_once 'includes/db_config.php';


$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreiraj događaj</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    
    <div class="container mt-5 position-relative">
        <div class="d-flex justify-content-between mb-4 buttons">
            <a href="dashboard.php" class="btn btn-dark">Zvanice</a>
            <a href="create_event.php" class="btn btn-primary">Kreiraj novi događaj</a>
            <a href="dashboard.php" class="btn btn-danger">Obriši događaj</a>
            <a href="dashboard.php" class="btn btn-info">Arhiva</a>
        </div>
    </div>



    <?php include 'templates/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>







