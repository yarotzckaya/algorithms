<?php
require_once 'AbstractReader.php';

class SimpleReader extends AbstractReader
{
	private $booksLimit = 3;

	public function checkBookLimit()
	{
//		if (count($this->getBooks()) < $this->booksLimit) {
//			return true;
//		} else {
//			return false;
//		}
        return count($this->getBooks()) < $this->booksLimit;
	}
}