<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Product extends Model
{

	use Sluggable;
	use SluggableScopeHelpers;

	protected $table = 'products';

	protected $fillable = ['name','description', 'extract', 'price', 'category_id', 'visible', 'image'];

	public function category(){
		return $this->belongsTo('App\Category');
	}
	public function order_item(){
		return $this->hasOne('App\OrderItem');
	}
	public function scopeCreated($query){
		return $query->orderBy('created_at', 'ASC');
	}
	public function scopePaginate($query){
		return $query->orderBy('id', 'ASC')->paginate(5);
	}

	public function sluggable(){
		return [
			'slug' => [
				'source' => 'name'
			]
		];
	}

}
