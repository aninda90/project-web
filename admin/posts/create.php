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
    <!-- custom mobile style -->
    <link rel="stylesheet" href="../../assets/css/admin-mobile.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <title>Buat Postingan</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

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
                    <h2 class="page-tittle">Create Post</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="body" id="body" class="form-control"><?php echo $body; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="topic_id" class="form-control">
                                <option value=""></option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                        <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="published" class="form-check-input" <?php echo empty($published) && $published === 0 ? '' : 'checked'; ?>>
                            <label class="form-check-label">Publish</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="add-post" class="btn btn-primary btn-block">Create Post</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- //Admin Content -->
    </div>
    <!-- //Admin Page Wrapper -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- ckeditor buat paragraf -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <!-- custom -->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>
