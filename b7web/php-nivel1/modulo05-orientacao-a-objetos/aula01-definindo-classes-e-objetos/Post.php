<?php


class Post
{
    public $likes = 0;
    public $comments = [];
    public $author;
}

$post1 = new Post();
$post1->likes = 5;

$post2 = new Post();
$post2->likes = 20;

echo "Post 1: ".$post1->likes;
echo "<br>";
echo "Post 2: ".$post2->likes;