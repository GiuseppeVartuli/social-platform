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
    <title>Social Boolean</title>
    
</head>

<body class="bg-secondary-subtle">
    <header>
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
        <img width="200px;" src="./assests/img/logo.png" alt="logo_boolean">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active ps-5" aria-current="page" href="./Diagramma ER/index.html">Diagramma ER</a>
                <a class="nav-link active" href="./Query/index.php">Query</a>
                
            </div>
            </div>
        </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <!-- Cards  -->
                <?php foreach($posts as $post) : ?>
                    <div class="col-md-8 mb-4 mt-5 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                <?php if($post->gender === "maschio") : ?>
                                    <img width="100px;" class="p-2" src="https://www.shareicon.net/data/256x256/2016/09/15/829466_man_512x512.png" alt="avatar_man">
                                    <?php else : ?>
                                        <img width="100px;" class="p-2" src="https://www.shareicon.net/data/256x256/2016/09/15/829452_user_512x512.png" alt="avatar_woman">
                                        <?php endif; ?>
                                        <!-- Username -->
                                    <h5 class="card-title mb-0"><?= $post->user ?></h5>
                                </div>
                                <!-- Date -->
                                <p class="card-text small fst-italic ps-2 "><?= $post->formatDate() ?></p>
                                <!-- Title -->
                                <p class="card-text ps-2"><?= $post->title ?></p>
                                <!-- Media -->
                                <?php foreach($post->media as $media) : ?>
                                    <?php if($media->type === 'photo') : ?>
                                        <img src="<?= $media->path ?>" class="card-img-top" alt="Foto">
                                    <?php else : ?>
                                        
                                        <iframe width="820" height="600" src="<?= $media->path ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <hr>
                                <!-- Tags -->
                                <div class="tags">
                                    <?php foreach($post->tags as $tag) : ?>
                                        <a href="#" class="badge bg-primary text-decoration-none ">#<?= $tag ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>