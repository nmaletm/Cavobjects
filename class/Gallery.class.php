<?php


class Gallery
{
	/** @var array */
	private $objects;



	public function __construct()
	{
		$this->objects = array();
	}

	public function getObjects()
	{
		return $this->objects;
	}

	public function addObject(Object $object)
	{
		if (isset($this->objects[$object->getId()])) {
			throw new Exception('Id of object already used');
		}
		$this->objects[$object->getId()] = $object;
	}

	public function getObject($id)
	{
		return $this->objects[$id];
	}

	public function getObjectOrderDesc()
	{
		return array_reverse($this->objects, true);
	}

	public function getObjectOrderDifficulty()
	{
		$objects = $this->objects;
		usort($objects, array('Gallery','difficultySort') );
		return $objects;
	}

	public function getObjectOrderDifficultyDesc()
	{
		$objects = $this->getObjectOrderDifficulty();
		return array_reverse($objects, true);
	}

	public function getObjectOrderMark()
	{
		$objects = $this->objects;
		usort($objects, array('Gallery','markSort') );
		return $objects;
	}

	public function getObjectOrderMarkDesc()
	{
		$objects = $this->getObjectOrderMark();
		return array_reverse($objects, true);
	}

	private static function difficultySort($a,$b)
	{
		return $a->getDifficulty() == $b->getDifficulty() ? 0 : ( $a->getDifficulty() > $b->getDifficulty() ) ? 1 : -1;
	}
	
	private static function markSort($a,$b)
	{
		return $a->getMark() == $b->getMark() ? 0 : ( $a->getMark() > $b->getMark() ) ? 1 : -1;
	}
}
