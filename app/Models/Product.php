<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

	protected $guarded = [];

	public function getImageAttribute()
	{
		return asset(\Storage::url($this->cover_path));
	}

	public function getNameAttribute()
	{
		switch (lang()) {
		  case 'sq':
		    return $this->name_sq;
		    break;
		  default:
		    return $this->name_en;
		}
	}

	public function getHeadlineAttribute()
	{
		switch (lang()) {
		  case 'sq':
		    return $this->headline_sq;
		    break;
		  default:
		    return $this->headline_en;
		}
	}

	public function getDescriptionAttribute()
	{
		switch (lang()) {
		  case 'sq':
		    return $this->description_sq;
		    break;
		  default:
		    return $this->description_en;
		}
	}

	public function getPriceAttribute()
	{
		switch (lang()) {
		  case 'sq':
		    return '€' . $this->price_sq;
		    break;
		  default:
		    return '$' . $this->price_en;
		}
	}
}
