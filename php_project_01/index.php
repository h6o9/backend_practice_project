<?php

require "blog.php";

// use BLOG\DB;

// $data = array();
// $data['posts'] = 'some posts';


$posts = BLOG\DB\get('posts', $conn);

// foreach ($posts as $post) {
//print_r($posts);
// }


view(
    'index',
    array(
        'posts' => $posts
    )
);

// $view_path = 'views/index.view.php';
// include 'views/layoout.php';