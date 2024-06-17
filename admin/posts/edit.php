<?php include "../../path.php";
include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- custom style -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/admin-mobile.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">


    <title>Halaman Admin</title>
</head>

<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php");

?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        <!-- Left Sidebar  -->
                <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!-- //Left sidebar -->
        <!-- Admin Content -->
            <div class="admin-content col-md-9 col-sm-12">
            <div class="button-group">
                <a href="create.php" class="btn btn-primary btn-sm">Add Post</a>
                <a href="index.php" class="btn btn-primary btn-sm">Manage Post</a>
            </div>

            <div class="content">
                <h2 class="page-tittle">Edit Posts</h2>
                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$post['id'];?>">

                <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input" value="<?= $title ?>">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?= $body ?></textarea>
                    </div>
                    <div>
                        <label>image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                            <?php foreach ($topics as $key => $topic) : ?>
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                                    <option selected value="<?= $topic['id']; ?>"><?= $topic['name']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $topic['id']; ?>"><?= $topic['name']; ?></option>

                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <?php if (empty($published)&& $published == 0) : ?>
                            <label>
                                <input type="checkbox" name="published">
                                publish
                            </label>
                        <?php else : ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                                publish
                            </label>
                        <?php endif;
                        ?>

                    </div>
                    <button type="submit" name="update-post"class="btn btn-primary btn-sm">Edit Post</button>
                </form>
            </div>

        </div>
    </div>
    <!-- //Admin Content -->
    <!-- Page Wrapper END -->


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- ckeditor buat paragraf -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>    
    <!-- custom -->
    <script src="../../assets/js/scripts.js"></script>

</body>

</html>