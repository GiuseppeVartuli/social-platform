<?php

require_once __DIR__ . '/app/Models/Post.php';
require_once __DIR__ . '/database/db.php';
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row m-4 ">
            <div class="col-12">
            <?php foreach($posts as $post) : ?>
            <div class="card p-2 " style="width: 18rem;">
        <p class="card-text"><?= $post->user ?></p>
        <p><?= $post->formatDate() ?></p>
        <h5 class="card-title"><?= $post->title?></h5>
        <?php foreach($post->media as $media) : ?>
        <?php if($media->type === 'photo') : ?>
            <img src="<?= $media->path  ?>" class="card-img-top" alt="...">
            <?php else : ?>
                <iframe width="270rem;" height="300rem;" src="<?= $media->path ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <?php endif; ?>
  <?php endforeach; ?>
  <div class="card-body">
    <?php foreach($post->tags as $tags) : ?>
    <a href="">#<?= $tags ?></a>
    <?php endforeach; ?>
  </div>
        </div>
        <?php endforeach; ?>
            </div>
        
    </div>

</div>
</body>
</html>