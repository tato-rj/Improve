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
			'name' => 'Joe Davis',
			'text' => 'Great services and staff, highly recommend them to anyone looking to improve their health and performance.',
			'position' => 'Lab technician',
			'image' => 'images/avatars/user2.jpg'
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