<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-login" style=" width: 280px;">
    <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">PAUDQu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto ">
        <?php foreach ($menuItems as $menuItem) : ?>
            <li class="nav-item">
                <a href=" <?= $menuItem['link'] ?>" class="nav-link text-white <?= ($currentPage == $menuItem['link']) ? 'active' : '' ?>">
                    <i class="fas fa-solid <?= $menuItem['icon'] ?>"></i>
                    <?= $menuItem['text'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            echo '<strong>' . $username . '</strong>'
            ?>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser1">
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Sign out</a></li>
        </ul>
    </div>
</div>