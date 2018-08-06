<?php
require_once 'PremiumReader.php';
require_once 'SimpleReader.php';
require_once 'Book.php';


/**
 * Class Library - contains main logic of transactions between books and readers.
 */
class Library
{
	private $books = [];

	public function __construct($books)
	{
		$this->books = $books;
	}

	public function getAllBooks()
	{
		return $this->books;
	}

	public function findBookByTitle($title)
	{
		for ($i = 0; $i < count($this->books); $i++) { 
			if($this->books[$i]->getTitle() == $title) {
				return $this->books[$i];
			}
		}

	}

	public function giveBookToReader($book, $reader)
	{
		if ($reader->checkBookLimit()) {
			for ($i = 0; $i < count($this->books); $i++) {
				if ($this->books[$i] === $book) {
					$reader->addBook($this->books[$i]);
					unset($this->books[$i]);
				}
			}
		
		} else {
			return "А по попе?";
		}
		
	}

	public function takeBookFromReader($book, $reader)
	{
		array_push($this->books, $book);
		$reader->removeBook($book);
	}
}


$book1 = new Book(22, 'Tuto', "Сенк и Матильда тусят", "Юлиана Яроцкая", 230, 2018);
$book2 = new Book(23, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book3 = new Book(24, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book4 = new Book(25, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book5 = new Book(26, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book6 = new Book(27, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book7 = new Book(28, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book8 = new Book(29, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book9 = new Book(30, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book10 = new Book(31, 'Tuto', "Vzutto", "Someone", 123, 1905);
$book11 = new Book(32, 'Tuto', "Vzutto", "Someone", 123, 1905);

$library = new Library([$book1, $book2, $book3, $book4, $book5, $book6, $book7, $book8, $book9, $book10, $book11]);
$reader = new SimpleReader(23, "Вася", "Пукин", 2012);


// $book = $library->findBookByTitle("Tuto");
// $library->giveBookToReader($book, $reader);
$library->giveBookToReader($book1, $reader);
$library->giveBookToReader($book2, $reader);
$library->giveBookToReader($book3, $reader);
$library->giveBookToReader($book4, $reader);
$library->giveBookToReader($book5, $reader);
$library->giveBookToReader($book6, $reader);
$library->giveBookToReader($book7, $reader);
$library->giveBookToReader($book8, $reader);
$library->giveBookToReader($book9, $reader);
$library->giveBookToReader($book10, $reader);
$library->giveBookToReader($book11, $reader);

print_r($reader->getBooks());
//print_r($library->getAllBooks());
