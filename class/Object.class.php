<?php


class Object
{
	/** @var int */
	private $id;

	/** @var array */
	private $photos;

	/** @var string */
	private $name;

	/** @var string */
	private $date;

	/** @var array */
	private $materials;

	/** @var array */
	private $tools;

	public function __construct($id, $photos)
	{
		$this->id = $id;
		$this->photos = $photos;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setMaterials($materials)
	{
		$this->materials = $materials;
	}

	public function setTools($tools)
	{
		$this->tools = $tools;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getPhotos()
	{
		return $this->photos;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDate()
	{
		return $this->date;
	}
	
	public function getMaterials()
	{
		return $this->materials;
	}
	
	public function getTools()
	{
		return $this->tools;
	}

	
	public function getMaterialsString()
	{
		return implode(', ', $this->materials);
	}

	public function getToolsString()
	{
		return implode(', ', $this->tools);
	}

	public function getMainPhoto()
	{
		if (!count($this->photos)) {
			return null;
		}
		return $this->photos[0];
	}

	public function getRenderPath($isRender)
	{
		if ($isRender) {
			return 'view-' . $this->getId() . '.html';
		}
			return 'view.php?id=' . $this->getId();
	}

}