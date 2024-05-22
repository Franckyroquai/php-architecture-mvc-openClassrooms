<?php

class Comment 
{
    public string $author;
    public string $frenchCreationDate;
    public string $comment;
}

$comment = new Comment();
$comment->author = 'Auteur';
$comment->frenchCreationDate = '10/03/2022 à 15h09';
$comment->comment = 'Commentaire';

$comment->author = 'nouvel auteur';

var_dump($comment);

function test(Comment $comment)
{
    var_dump($comment);
}

test($comment);