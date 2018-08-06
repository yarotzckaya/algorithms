<?php

class Book 
{
	private $id;
	private $title;
	private $annotation;
	private $author;
	private $pageCount;
	private $publishDate;

	public function __construct($id, $title, $annotation, $author, $pageCount, $publishDate) 
	{
		$this->id = $id;
		$this->title = $title;
		$this->annotation = $annotation;
		$this->author = $author;
		$this->pageCount = $pageCount;
		$this->publishDate = $publishDate;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getAnnotation()
	{
		return $this->annotation;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function getPageCount()
	{
		return $this->pageCount;
	}

	public function getPublishDate()
	{
		return $this->publishDate;
	}
}



