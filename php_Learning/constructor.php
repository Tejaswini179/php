 <?php error_reporting (E_ALL ^ E_NOTICE);

class Book {
    var $tital ;
    var $author;
    var $pages;


    function __construct($aTital, $aAuthor, $aPages)
    {
      $this -> title = $aTital;
      $this -> author = $aAuthor;
      $this -> pages = $aPages;
    }
    
}

//object
$book1 = new Book("Harry Potter","JK Rowling",200);


echo "Book name is : ", $book1 -> title ,"<br>";
echo "Author name is : ", $book1 -> author,"<br>";
echo "Number of pages is books are : ", $book1 -> pages,"<br>";
?> 