<?php
require_once 'classes.php';

$book1 = new Book('Livro 01', 'Diego');
$book2 = new Book('Livro 02', 'Rogerio');
$book3 = new Book('Livro 03', 'Di');

$booklist = new BookList();
$booklist->addBook($book1);
$booklist->addBook($book2);
$booklist->addBook($book3);

while($booklist->valid()){
    $livro = $booklist->current();

    echo $livro->getTitle().'<br>';

    $booklist->next();
}

/*$livro1 = $booklist->current();
echo "Livro 1 - ". $livro1->getTitle().'<br>';

$booklist->next();

$livro2 = $booklist->current();
echo "Livro 2 - ". $livro2->getTitle().'<br>';

$booklist->reset();

$livro3 = $booklist->current();
echo "Livro 3 - ". $livro2->getTitle().'<br>';*/