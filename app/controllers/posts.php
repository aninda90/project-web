<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';

$id = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();

if (isset($_POST['add-post'])) {
adminOnly();
    $errors = validatePost($_POST);
    // dd($_FILES['image']['name']);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/assets/images/' . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to post image");
        }
    } else {
        array_push($errors, "Post image required");
    }
    
if (count($errors) == 0) {
        unset($_POST['add-post']);
        // dd($_POST);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published'])? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);


        $posts_id = create($table, $_POST);
        $_SESSION['message'] = "Post created successfully";
        $_SESSION['type'] = "success";
        header('location:' . BASE_URL . '/admin/posts/index.php');
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published'])? 1 : 0;
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $post = selectOne($table, ['id' => $id]);
    // dd($post);
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}


if (isset($_POST['update-post'])) {
    adminOnly();

    $errors = validatePost($_POST);
    // dd($_FILES['image']['name']);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/assets/images/' . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to post image");
        }
    } else {
        array_push($errors, "Post image required");
    }
    if (count($errors) == 0) {
        $id = $_POST['id']; 
        unset($_POST['update-post'], $_POST['id']);
        // dd($_POST);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published'])? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post update successfully";
        $_SESSION['type'] = "success";
        header('location:' . BASE_URL . '/admin/posts/index.php');
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published'])? 1 : 0;
    }
    
}
if (isset($_GET['del_id'])) {
adminOnly();

    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Post delete successfully';
    $_SESSION['type'] = 'success';
    header('location:' . BASE_URL . '/admin/posts/index.php');
}

if (isset($_GET['published'])&& isset($_GET['p_id'])) {
adminOnly();

    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published'=> $published]);
    header('location:' . BASE_URL . '/admin/posts/index.php');
    exit();
}