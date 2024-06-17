<?php include "path.php";
include (ROOT_PATH . "/app/controllers/users.php");
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
<?php include (ROOT_PATH . "/app/includes/header.php")?>

    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-tittle">Login</h2>

            <?php include (ROOT_PATH . "/app/helpers/formErrors.php")?>

            <div>
                <label>Username</label>
                <input type="text" name="username" class="text-input" value="<?php echo $username;?>">
            </div>
            <div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" class="text-input"value="<?php echo $password;?>">
                </div>
                <div>
                    <button type="submit" name="login-btn" class="btn btn-big">Login</button>
                </div>
                <p>Belum punya akun? <a href="register.php">daftar disini</a></p>
        </form>
    </div>


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom -->
    <script src="assets/js/scripts.js"></script>

</body>

</html>