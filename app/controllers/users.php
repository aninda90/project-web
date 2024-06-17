<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$id = '';
$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';
$admin = '';
$users = selectAll($table);


function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';
    if ($_SESSION['admin']) {
        header('location:' . BASE_URL . '/admin/dashboard.php');
    } else {
        header('location:' . BASE_URL . '/index.php');
    }
    exit();
}

if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
    $errors = validateUser($_POST);
    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            header('location:' . BASE_URL . '/admin/users/index.php');
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        }
    } else {
        $username = $_POST['username'];
        $admin = $_POST['admin'] ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}


if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);
    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
            array_push($errors, "Ada kesalahan");
        }
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
}
if (isset($_GET['del_id'])) {
adminOnly();

    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'User delete successfully';
    $_SESSION['type'] = 'success';
    header('location:' . BASE_URL . '/admin/users/index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = selectOne($table, ['id' => $id]);
    // dd($user);
    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin'] ==1 ? 1 : 0;
    $email = $user['email'];
}

if (isset($_POST['update-admin'])) {
adminOnly();

    // dd($_POST);
    
    $errors = validateUser($_POST);
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['passwordConf'], $_POST['update-admin'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['admin'] =  isset($_POST['admin']) ? 1 : 0;

        $count = update($table, $id, $_POST);
        header('location:' . BASE_URL . '/admin/users/index.php');
        exit();
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}
