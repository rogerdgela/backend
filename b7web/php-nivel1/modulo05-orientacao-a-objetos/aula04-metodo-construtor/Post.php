<?php
// metodos public, private, protected
class Post
{
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function __construct($qtyLikes = null)
    {
        $this->likes = $qtyLikes;
    }
}

$post1 = new Post(20);

$post2 = new Post(30);



echo "Post 1: ".$post1->likes;
echo "<br>";
echo "Post 2: ".$post2->likes;