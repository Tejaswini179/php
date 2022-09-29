<?php error_reporting (E_ALL ^ E_NOTICE);

class Book {
    var $tital ;
    var $author;
    var $pages;


}

//object
$book1 = new Book();
$book1 -> title = "Harry Potter";
$book1 -> author = "JK Rowling";
$book1 -> pages = 200;

echo "Book name is : ", $book1 -> title ,"<br>";
echo "Author name is : ", $book1 -> author,"<br>";
echo "Number of pages is books are : ", $book1 -> pages,"<br>";
?>