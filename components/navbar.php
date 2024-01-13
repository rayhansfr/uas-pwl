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
            <ul class="navbar-nav mx-auto" id="mainNavLinks">
                <li class="nav-item" id="home">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>

                <li class="nav-item" id="infoppdb">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'infoppdb.php' ? 'active' : ''; ?>" href="infoppdb.php">Info PPDB</a>
                </li>

                <li class="nav-item" id="pendaftaran">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'pendaftaran.php' ? 'active' : ''; ?>" href="pendaftaran.php">Pendaftaran</a>
                </li>

                <li class="nav-item" id="contact">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact Us</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-light" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>