<?php include "../../path.php";
include (ROOT_PATH . "/app/controllers/users.php");
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
                <a href="create.php" class="btn btn-primary btn-sm">Add User</a>
                <a href="index.php" class="btn btn-primary btn-sm">Manage User</a>
            </div>

            <div class="content">
                <h2 class="page-tittle">Manage User</h2>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $key => $user):?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$user['username']?></td>
                            <td><?=$user['email']?></td>
                            <td><a href="edit.php?id=<?=$user['id'];?>" class="edit">Edit</a></td>
                            <td><a href="index.php?del_id=<?=$user['id'];?>" class="delete">Delete</a></td>
                        </tr>
                        <?php endforeach?>
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