<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

	protected $guarded = [];
	protected $currency = '€';

	public function getImageAttribute()
	{
		return asset(\Storage::url($this->cover_path));
	}

	public function getNameAttribute()
	{
		switch (lang()) {
		  case 'sq':
		    return $this->name_sq ?? $this->name_en;
		    break;
		  default:
		    return $this->name_en;
		}
	}

	public function getHeadlineAttribute()
	{
		switch (lang()) {
		  case 'sq':
		    return $this->headline_sq ?? $this->headline_en;
		    break;
		  default:
		    return $this->headline_en;
		}
	}

	public function getDescriptionAttribute()
	{
		switch (lang()) {
		  case 'sq':
		    return $this->description_sq ?? $this->description_en;
		    break;
		  default:
		    return $this->description_en;
		}
	}

	public function getPriceAttribute()
	{
		$ext = '<small>.00</small>';

		switch (lang()) {
		  case 'sq':
		    return $this->price_sq ? $this->currency . $this->price_sq . $ext :  $this->currency . $this->price_en . $ext;
		    break;
		  default:
		    return $this->currency . $this->price_en . $ext;
		}
	}

	public function scopeRetrieve($query)
	{
		switch (request()->sortby) {
		  case 'newest':
		    $column = 'created_at';
		    $order = 'DESC';
		    break;
		  case 'oldest':
		    $column = 'created_at';
		    $order = 'ASC';
		    break;
		  case 'az':
		    $column = lang() == 'sq' ? 'name_sq' : 'name_en';
		    $order = 'ASC';
		    break;
		  case 'za':
		    $column = lang() == 'sq' ? 'name_sq' : 'name_en';
		    $order = 'DESC';
		    break;
		  default:
		    $column = 'created_at';
		    $order = 'DESC';
		}

		return $query->orderBy($column, $order)->paginate(6);
	}
}
