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
		$this->objects[$object->getId()] = $object;
	}

	public function getObject($id)
	{
		return $this->objects[$id];
	}
}