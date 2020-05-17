<?php
// metodos public, private, protected
class Post
{
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function aumentarLike(){
        $this->likes++;
    }
}

$post1 = new Post();
$post1->likes = 20;

$post2 = new Post();
$post2->comments = ['teste'];


echo "Post 1: ".$post1->likes;
echo "<br>";
echo "Post 2: ".$post2->likes;