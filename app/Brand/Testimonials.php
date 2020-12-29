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
			'text' => 'In metus vulputate eu scelerisque. Ullamcorper dignissim cras tincidunt lobortis feugiat!',
			'position' => 'Lab technician',
			'image' => 'images/avatars/user2.jpg'
		], [
			'name' => 'Joan Reeves',
			'text' => 'Augue neque gravida in fermentum et. Maecenas ultricies mi eget mauris pharetra et. Facilisi morbi tempus iaculis urna id volutpat lacus.',
			'position' => 'Journalist',
			'image' => 'images/avatars/user3.jpg'
		], [
			'name' => 'Brian Greene',
			'text' => 'Arcu cursus euismod quis viverra nibh. Aliquam malesuada bibendum arcu vitae elementum curabitur! Tincidunt eget nullam non nisi.',
			'position' => 'Engineer',
			'image' => 'images/avatars/user4.jpg'
		], [
			'name' => 'Ashley Jones',
			'text' => 'Adipiscing vitae proin sagittis nisl rhoncus mattis. Ante in nibh mauris cursus mattis molestie a iaculis.',
			'position' => 'Athlete',
			'image' => 'images/avatars/user5.jpg'
		]
	];

	public function get()
	{
		return $this->testimonials;
	}
}