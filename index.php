<?php
session_start();

require_once 'vendor/autoload.php'; 
require_once 'includes/db_config.php';
use Detection\MobileDetect;
$detect = new MobileDetect;

$ip_address = $_SERVER['REMOTE_ADDR']; 
$http_user_agent = $_SERVER['HTTP_USER_AGENT']; 

$device_type = 'computer'; 
if ($detect->isMobile()) {
    $device_type = 'phone';
} elseif ($detect->isTablet()) {
    $device_type = 'tablet';
}

$operation_system = 'other'; 
if ($detect->isAndroidOS()) {
    $operation_system = 'android';
} elseif ($detect->isiOS()) {
    $operation_system = 'ios';
}

try {
    $stmt = $pdo->prepare("INSERT INTO detects (ip_address, operation_system, device_type, http_user_agent) VALUES (?, ?, ?, ?)");
    $stmt->execute([$ip_address, $operation_system, $device_type, $http_user_agent]);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="container mt-5">
        <h1>Dobrodošli u "Event"</h1>
        <p>Ova aplikacija vam omogućava da kreirate događaje na jednostavan i efikasan način.</p>
        <?php //if (!isset($_SESSION['user_id'])): ?>
            <a href="register.php" class="btn btn-primary">Registruj se</a>
            <a href="login.php" class="btn btn-secondary">Prijavi se</a>
        <?php// else: ?>
            <a href="<?php //echo ($_SESSION['role'] == 'admin') ? 'dashboard_admin.php' : 'dashboard.php'; ?>" class="btn btn-success">Događaji</a>
            <a href="logout.php" class="btn btn-danger">Odjavi se</a>
        <?php// endif; ?>
        <img src="images/1.png" class="img-fluid mt-4" alt="slika1">
    </div>

    <?php include 'templates/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
