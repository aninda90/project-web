<header>
    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">


        <h1 class="logo-text"><span>Random</span>Talks</h1>
    </a>
    <i class="bi bi-list menu-toggle"></i>
    <ul class="nav">
        <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
        <?php
        if (isset($_SESSION['id'])) : ?>
            <li><a><?php echo $_SESSION['username']; ?></a>
                <ul>
                    <?php if ($_SESSION['admin']) : ?>
                        <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>"><i class="bi bi-house-fill"></i>Dashboard</a></li>
                        <?php endif ?>
                        <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
                   
                </ul>
            </li>
        <?php else : ?>
            <li><a href="<?php echo BASE_URL . '/register.php' ?>">Signup</a></li>
            <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
        <?php endif;

        ?>

    </ul>
</header>