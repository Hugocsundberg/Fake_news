<?php
//Post-data
$data = json_decode(file_get_contents('https://fake-news-backend-1337.herokuapp.com/export.php'));

//Author-data
$getAuthor = function (int $id): string {
    $author_data = json_decode(file_get_contents('https://fake-news-backend-1337.herokuapp.com/export_author.php'));
    foreach ($author_data as $author) {
        if ($author->id === $id) {
            return $author->author_name;
        }
    }
};
