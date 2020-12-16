<?php 

function validatePosts($post)
{
    $errors = array();

    if (empty($post['title'])){
        array_push($errors, 'title is required');
    }
    if (empty($post['body'])){
        array_push($errors, 'body is required');
    }
    if (empty($post['topic_id'])){
        array_push($errors, 'select any topic');
    }
    
    $existingPost = selectOne('posts', ['title'=> $post['title']]);
    if ($existingPost){
        if (isset($post['update-post']) && existingPost['id'] != $post['id']) {
            array_push($errors, 'Post already exists!');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Post already exists!');
        }
    }

    return $errors;

}