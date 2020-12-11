<?php

namespace App\Brand;

class Improve
{
	protected $socialLinks = [
		'facebook' => 'https://www.facebook.com/Improveee',
		'instagram' => 'https://www.instagram.com/improverks/'
	];

	public function socialLink($platform)
	{
		if (array_key_exists($platform, $this->socialLinks))
			return $this->socialLinks[$platform];

		return null;
	}
}