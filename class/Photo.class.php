<?php


class Photo
{
	/** @var string */
	private $path;

	public function __construct($path)
	{
		$this->path = $path;
	}

	public function getPath()
	{
		return $this->path;
	}

	public function getRenderPath($mode, $isRender)
	{
		if ($isRender) {
			return 'images/' . $mode . '/' . $this->path;
		}
		return 'photo.php?photo=' . $this->path . '&mode='.$mode;
	}
}