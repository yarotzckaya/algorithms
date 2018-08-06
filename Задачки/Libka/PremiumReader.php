<?php
require_once 'AbstractReader.php';

class PremiumReader extends AbstractReader
{
	private $booksLimit = 10;

	public function checkBookLimit()
	{
		return count($this->getBooks()) < $this->booksLimit;
	}
}