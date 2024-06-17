<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'topics';

$id = '';
$name = '';
$description = '';

$topics = selectAll($table);

if (isset($_POST['add-topic'])) {
    unset($_POST['add-topic']);
    // dd($_POST);
    $topic_id = create('topics', $_POST);
    $_SESSION['message'] = 'Topic created successfully';
    $_SESSION['type'] = 'success';
    header('location:' . BASE_URL . '/admin/topics/index.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_POST['update-topic'])) {
    adminOnly();

    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table, $id, $_POST);
    $_SESSION['message'] = 'Topic update successfully';
    $_SESSION['type'] = 'success';
    header('location:' . BASE_URL . '/admin/topics/index.php');
}
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Topic delete successfully';
    $_SESSION['type'] = 'success';
    header('location:' . BASE_URL . '/admin/topics/index.php');
}
