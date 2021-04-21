<?php

namespace App\Brand;

class Testimonials
{
	protected $testimonials = [
		[
			'name' => 'Drin Ferataj',
			'text' => 'The services and sports nutrition products are of the highest quality, and I see continuous improvement in my performance, in both training and competition.',
			'position' => 'Volleyball Player',
			'image' => 'images/avatars/drin-ferataj.jpg'
		], [
			'name' => 'Flamur Neziri',
			'text' => 'I am very pleased with the products at IMPROVE as I am feeling much fresher in the game and training.',
			'position' => 'Goalkeeper',
			'image' => 'images/avatars/flamur-neziri.jpg'
		], [
			'name' => 'Joan Reeves',
			'text' => 'The IMPROVE team helped me improve my performance with their traning planning and monitoring. Excellent products as well!',
			'position' => 'Journalist',
			'image' => 'images/avatars/user3.jpg'
		]
	];

	public function get()
	{
		return $this->testimonials;
	}
}