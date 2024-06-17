<?php include "path.php";
include(ROOT_PATH . "/app/controllers/posts.php");

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
    // dd($post); 
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- custom style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <title><?= $post['title']; ?></title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Content -->
        <div class="content clearfix">
            <!-- Main content -->
            <div class="main-content-wrapper">
                <div class="main-content single">
                    <h1 class="post-title"><?= $post['title']; ?></h1>
                    <div class="post-content">
                        <?= html_entity_decode($post['body']); ?>
                    </div>
                </div>
            </div>
            <!-- //Main content -->
            <!-- sidebar -->
            <div class="sidebar single">
                <div class="section popular">
                    <h2 class="section-tittle">Popular</h2>

                    <?php foreach ($posts as $p) : ?>
                        <div class="post clearfix">
                            <img src="<?= BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                            <a href="" class="tittle">
                                <h4><?= $p['title']; ?></h4>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="section topics">
                    <h2 class="section-tittle">Topics</h2>
                    <ul>

                    <?php foreach ($topics as $topic) : ?>
                        <li><a href="<?= BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"</a></li>
                    <?php endforeach ?>
                        
                    </ul>
                </div>
            </div>

        </div>
        <!-- // Content -->
    </div>
    <!-- Page Wrapper END -->

    <!-- footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- custom -->
    <script src="assets/js/scripts.js"></script>

</body>

</html>