<?php


class Object
{
	/** @var int */
	private $id;

	/** @var string */
	private $name;

	/** @var array */
	private $photos;

	/** @var string */
	private $date;

	public function __construct($id, $name, $date, $photos)
	{
		$this->id = $id;
		$this->name = $name;
		$this->date = $date;
		$this->photos = $photos;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getPhotos()
	{
		return $this->photos;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function getMainPhoto()
	{
		if (!count($this->photos)) {
			return null;
		}
		return $this->photos[0];
	}

}