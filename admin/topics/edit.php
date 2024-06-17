<?php include "../../path.php";
include (ROOT_PATH . "/app/controllers/topics.php");
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
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");
?>
        <!-- //Left sidebar -->
        <!-- Admin Content -->
        <div class="admin-content col-md-9 col-sm-12">
            <div class="button-group">
                <a href="create.php" class="btn btn-primary btn-sm">Add Topic</a>
                <a href="index.php" class="btn btn-primary btn-sm">Manage Topic</a>
            </div>

            <div class="content">
                <h2 class="page-tittle">Edit Topic</h2>
                <form action="edit.php" method="post">
                <input type="hidden" name="id"value="<?= $id;?>">
                    <div>
                        <label>Nama</label>
                        <input type="text" name="name" class="text-input" value="<?= $name;?>">
                    </div>
                    <div>
                        <label>Deskripsi</label>
                        <textarea name="description" id="body"><?= $description;?></textarea>
                    </div>

                    <button type="submit" name="update-topic"class="btn btn-primary btn-sm">Edit Topic</button>
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