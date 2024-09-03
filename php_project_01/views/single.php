<?php

require '../blog.php';

use BLOG\DB;

$posts = DB\get_by_id((int) $_GET['id'], $conn);


// echo "<pre>";
// print_r($posts);
// echo "</pre>";
if ($posts) {
    $post = $posts;
    view(
        'single',
        array(
            'posts' => $post
        )
    );
}



// if ($posts) {
//     $posts = $posts[0];
// } else {
//     header('location:/');
// }

// $view_path = 'single.view.php';
// include 'layout.php';
?>