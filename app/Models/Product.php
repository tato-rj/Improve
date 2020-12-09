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

	public function getFormattedPriceAttribute()
	{
		$price = $this->applyDiscount();
		
		$oldPrice = ' <span class="text-red" style="font-size: 65%"><s>'.$this->centsToCurrency($this->price) .'</s></span>';
		
		return $this->discount ? $price.$oldPrice : $price;
	}

	public function applyDiscount()
	{
		$discount = $this->price * $this->discount / 100;

		$finalPrice = $this->price - $discount;

		return $this->centsToCurrency($finalPrice);
	}

	public function centsToCurrency($amount)
	{
		return $this->currency . number_format($amount/100, 2);
	}

	public function scopeRetrieve($query)
	{
		return $query->filter(request()->view, ['onsale' => 'discount'])
					 ->sort(request()->sortby)
					 ->paginate(6);
	}

	public function scopeFilter($query, $input, $attr)
	{
		foreach($attr as $name => $column) {
			if ($input == $name)
				$query->where($column, '!=', 0);
		}
	}

	public function scopeSort($query, $input)
	{
		switch ($input) {
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

		$query->orderBy($column, $order);
	}
}
