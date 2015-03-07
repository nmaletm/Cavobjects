<?php


class Object
{
	/** @var int */
	private $id;

	/** @var PhotoGallery */
	private $photoGallery;

	/** @var string */
	private $name;

	/** @var string */
	private $date;

	/** @var array */
	private $materials;

	/** @var array */
	private $tools;

	/** @var int */
	private $mark;

	/** @var int */
	private $difficulty;

	public function __construct($id)
	{
		$this->id = $id;
	}

	public function initGallery($pathTemplate, $numPhotos)
	{
		$this->photoGallery = new PhotoGallery($pathTemplate, $numPhotos);
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

	public function setMark($mark)
	{
		$this->mark = $mark;
	}

	public function setDifficulty($difficulty)
	{
		$this->difficulty = $difficulty;
	}


	public function getId()
	{
		return $this->id;
	}

	public function getPhotos()
	{
		return $this->photoGallery->getPhotos();
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
	
	public function getMark()
	{
		return $this->mark;
	}
	
	public function getDifficulty()
	{
		return $this->difficulty;
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
		$photos = $this->getPhotos();
		if (!count($photos)) {
			return null;
		}
		return $photos[0];
	}

	public function getRenderPath($isRender)
	{
		if ($isRender) {
			return 'view-' . $this->getId() . '.html';
		}
			return 'view.php?id=' . $this->getId();
	}

}