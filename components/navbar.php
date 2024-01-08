<!-- NAVBAR GOES HERE -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1a1a1a;">
    <div class="container">
        <a class="navbar-brand" href="home.php">
            <img src="assets/logo.png" alt="logo" width="50" class="d-inline-block me-3">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'home.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="home.php">Home</a>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'infoppdb.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="infoppdb.php">Info PPDB</a>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'pendaftaran.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-secondary" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>