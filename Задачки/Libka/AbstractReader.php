<?php
require_once 'Book.php';

abstract class AbstractReader
{
	private $id;
	private $firstName;
	private $lastName;
	private $expirationDate;
	private $books = [];

	public function __construct($id, $firstName, $lastName, $expirationDate)
	{
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->expirationDate = $expirationDate;
	}

	public function hasReachedBookLimit()
	{
		return count($this->getBooks()) < $this->booksLimit;
	}

	public function __toString()
	{
		return $this->firstName . ' ' . $this->lastName . ' ' . $this->expirationDate;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function getExpirationDate()
	{
		return $this->expirationDate;
	}

	public function getBooks()
	{
		return $this->books;
	}

	public function addBook($book)
	{
		array_push($this->books, $book);
	}

	public function removeBook($book)
	{
		for ($i = 0; $i < count($this->books); $i++) {
			if ($this->books[$i] === $book) {
				unset($this->books[$i]);
			}
		}
	}
}