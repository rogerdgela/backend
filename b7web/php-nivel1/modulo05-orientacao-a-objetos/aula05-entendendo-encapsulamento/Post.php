<?php
// metodos public, private, protected
class Post
{
    public int $likes = 0;
    public array $comments = [];
    private string $author = '';

    public function setAuthor($nome)
    {
        $this->author = $nome;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

$post1 = new Post();
$post1->setAuthor("Rogerio");

$post2 = new Post();
$post2->setAuthor("Dgela");
/*$post2->author = 'dwdd';*/

echo "Post 1: ".$post1->getAuthor();
echo "<br>";
echo "Post 2: ".$post2->getAuthor();