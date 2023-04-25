<?php 

require_once "app/shop/book.php";
require_once "app/review/book.php";


use app\shop\Book;
// use app\review\Book as BookReview;

$book = new Book();
echo $book->getPrice();

$book_review = new app\review\Book();

echo $book_review->getPoint();

