<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<h1>The Blog post</h1>

<?php foreach ($posts as $post): ?>
    <article>
        <h2>
            <a href="views/single.php?id=<?= $post['id']; ?>">
                <?= $post['title']; ?>
            </a>
        </h2>
        <div class="body"><?= $post['body']; ?></div>
    </article>
<?php endforeach; ?>

<!-- <?php

// echo "Test";
// echo "<br>";
// echo "<pre>";
// print_r($posts);
// echo "</pre>";

// print_r($posts[0]['title']);
?> -->
</body>

</html>