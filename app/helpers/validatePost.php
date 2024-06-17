<?php
function validatePost($post)
{
    $errors = array();
    if (empty($post['title'])) {
        array_push($errors, 'Title is required');
    }
    if (empty($post['body'])) {
        array_push($errors, 'Body is required');
    }
    if (empty($post['topic_id'])) {
        array_push($errors, 'topic is required');
    }

    $existingPost = selectOne('posts', ['title'=> $post['title']]);
    if($existingPost){
        if (isset($post['update-post']) && $existingPost['id']!= $post['id']){
            array_push($errors, 'Post dengan judul itu sudah ada');
        } 
        if (isset($post['add-post'])) {
            array_push($errors, 'Post dengan judul itu sudah ada');
        }
    }
    return $errors;
}