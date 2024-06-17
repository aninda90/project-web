<?php include "path.php";
include(ROOT_PATH . "/app/controllers/topics.php");


$posts = array();
$postsTitle = 'Artikel terkini';
$topics = selectAll('topics');

if (isset($_GET['t_id'])) {
    $posts = getPostsbyTopicId($_GET['t_id']);
    $postsTitle= "Kamu mencari artikel tema '" . $_GET['name'] . "'";

    // dd($post); 
} else if (isset($_POST['search-term'])) {
    // dd($_POST);
    $postsTitle= "Kamu mencari '" . $_POST['search-term'] . "'";
    $posts = searhPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}


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
    <title>Blog</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Post Slider -->

        <div class="post-slider">
            <h1 class="slider-tittle">Artikel Trending</h1>
            <i class="bi bi-arrow-left-square-fill prev"></i>
            <i class="bi bi-arrow-right-square-fill next"></i>
            <div class="post-wrapper">
                <?php foreach ($posts as $post) : ?>
                    <div class="post">
                        <img src="<?= BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h4>
                                <a href="single.php?id=<?= $post['id']?>"><?= $post['title']; ?></a>
                            </h4>
                            <i class="bi bi-person-circle"></i><a><?= $post['username']; ?></a>
                            &nbsp;
                            <i class="bi bi-calendar-event"></i><a><?= date('F j, Y', strtotime($post['created_at'])); ?></a>
                        </div>
                    </div>
                <?php endforeach ?>


            </div>
        </div>

        <!-- // Post Slider -->

        <!-- Content -->
        <div class="content clearfix">
            <!-- Main content -->
            <div class="main-content">
                <h1 class="recent-post-tittle"><?=$postsTitle?></h1>
                <?php foreach ($posts as $post) : ?>

                    <div class="post clearfix">
                        <img src="<?= BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.php?id=<?= $post['id']?>"><?= $post['title']; ?></a></h2>
                            <i class="bi bi-person-circle"></i><a><?= $post['username']; ?></a>
                            &nbsp;
                            <i class="bi bi-calendar-event"></i><a><?= date('F j, Y', strtotime($post['created_at'])); ?></a>
                            <p class="preview-text"><?= html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <a href="single.php?id=<?= $post['id']?>" class="btn read-more">Read more</a>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
            <!-- //Main content -->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-tittle">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="search...">
                    </form>
                </div>


                <div class="section topics">
                    <h2 class="section-tittle">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic) : ?>
                            <li><a href="<?= BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?= $topic['name']; ?></a></li>
                        <?php endforeach; ?>

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