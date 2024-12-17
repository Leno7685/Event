<nav class="navbar navbar-expand-lg navbar-light glavniNav">
    <div class="container-fluid">
        <a class="navbar-brand home" href="index.php">Event</a>
        
        <div class="d-lg-none">     <!-- sekundarna navigacija za manje ekrane -->
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">Meni</button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <?php if($_SESSION['role'] == "admin"): ?>
                    <li><a class="dropdown-item" href="log_statistics.php">Statistika logovanja</a></li>
                    <?php endif; ?>
                    <li><a class="dropdown-item" href="<?php echo ($_SESSION['role'] == 'admin') ? 'dashboard_admin.php' : 'dashboard.php'; ?>">Događaji</a></li>
                    <li><a class="dropdown-item" href="create_event.php">Kreiraj događaj</a></li>
                    <li><a class="dropdown-item" href="help.php">Pomoć</a></li>
                    <li><a class="dropdown-item" href="logout.php">Odjavi se</a></li>
                    <!--<li><a class="dropdown-item" href="account_info.php">Profil</a></li>-->
                <?php else: ?>
                    <li><a class="dropdown-item" href="login.php">Prijavi se</a></li>
                    <li><a class="dropdown-item" href="register.php">Registruj se</a></li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav"> <!-- primarna navigacija -->
            <ul class="navbar-nav ms-auto">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <?php if($_SESSION['role'] == "admin"): ?>
                    <li class="nav-item"><a class="nav-link" href="log_statistics.php">Statistika logovanja</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo ($_SESSION['role'] == 'admin') ? 'dashboard_admin.php' : 'dashboard.php'; ?>">Događaji</a></li>
                    <li class="nav-item"><a class="nav-link" href="create_event.php">Kreiraj događaj</a></li>
                    <li class="nav-item"><a class="nav-link" href="help.php">Pomoć</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Odjavi se</a></li>
                    <!--<li class="nav-item"><a class="nav-link" href="account_info.php">Profil</a></li>-->
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Prijavi se</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Registruj se</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
