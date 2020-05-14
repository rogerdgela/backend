<?php
// metodos public, private, protected
class Post
{
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentarLike(){
        $this->likes++;
    }
}

$post1 = new Post();
$post1->aumentarLike();
$post1->aumentarLike();

$post2 = new Post();
$post2->aumentarLike();

echo "Post 1: ".$post1->likes;
echo "<br>";
echo "Post 2: ".$post2->likes;