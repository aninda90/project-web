<header>
    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
        <h1 class="logo-text">
            <span>Random</span>Talks
        </h1>
    </a>
    <i class="bi bi-list menu-toggle"></i>
    <ul class="nav">
        <!-- <li><a href="#">Signup</a></li>
            <li><a href="#">Login</a></li> -->
        <?php if (isset($_SESSION['username'])) : ?>
            <li><a><?php echo $_SESSION['username']; ?></a>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
                </ul>
            </li>
        <?php endif ?>

    </ul>
</header>