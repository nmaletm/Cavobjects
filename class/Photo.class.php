<?php


class Photo
{
	/** @var string */
	private $path;

	const SIZE_THUMBNAIL = 'thumbnail';
	const SIZE_NORMAL = 'normal';
	const SIZE_LARGE = 'large';

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

	public function getSizes()
	{
		return array(
			Photo::SIZE_THUMBNAIL, 
			Photo::SIZE_NORMAL, 
			Photo::SIZE_LARGE, 
		);
	}
}