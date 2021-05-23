<?php
require_once './manage/gallery/galleryClass.php';
$galleryClass=new galleryClass();
$albumList=$galleryClass->listAlbum();
?>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="//bootsnipp.com/dist/bootsnipp.min.css">
<style>
    body {
    padding: 30px 0px;
}
</style>
<div class="container">
    <?php
    if(count($albumList)){
    foreach ($albumList as $value) {
        echo '<div class="col-xs-6 col-sm-3"><h3><a href="gallery.php?id='.$value["AlbumId"].'">'.$value["AlbumName"].'</a></h3></div>';
    }
    }
    ?>
</div>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>