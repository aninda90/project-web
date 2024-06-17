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
                <h2 class="page-tittle">Manage Posts</h2>
               
                <?php include(ROOT_PATH . "/app/includes/messages.php");?>

                <table class="table table-striped table-responsive">
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post) : ?>
                            <tr>

                                <td><?= $key + 1 ?></td>
                                <td><?= $post['title']; ?></td>
                                <td><a href="edit.php?id=<?=$post['id'];?>" class="edit">Edit</a></td>
                                <td><a href="index.php?del_id=<?=$post['id'];?>"  class="delete">Delete</a></td>
                                <?php if ($post['published']) : ?>
                                    <td><a href="edit.php?published=0&p_id=<?= $post['id']?>" class="unpublish">unpublish</a></td>
                                <?php else : ?>
                                    <td><a href="edit.php?published=1&p_id=<?= $post['id']?>" class="publish">publish</a></td>
                                <?php endif ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- //Admin Content -->
    <!-- Page Wrapper END -->


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom -->
    <script src="../../assets/js/scripts.js"></script>

</body>

</html>