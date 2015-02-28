<?php


class PhotoGallery
{
	/** @var array */
	private $photos;



	public function __construct($pathTemplate, $numPhotos)
	{
		$this->photos = array();
		for ($i = 1; $i <= $numPhotos; $i++) {
			$photo = new Photo($this->generatePhotoPath($pathTemplate, $i));
			array_push($this->photos, $photo);
		}
		
	}

	public function getPhotos()
	{
		return $this->photos;
	}

	private function generatePhotoPath($template, $photo)
	{
		return str_replace('%d', $photo, $template);
	}
}