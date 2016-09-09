<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Category extends Model
{
	use Sluggable;
	use SluggableScopeHelpers;

	protected $table = 'categories';

	protected $fillable = ['name', 'description'];

	public function products(){
		return $this->hasMany('App\Product');
	}
	public function scopeOrderid($query){
		return $query->orderBy('id', 'ASC');
	}
	public function scopePaginate($query){
		return $query->orderBy('id', 'DESC')->paginate(5);
	}
	public function scopeSearchCategory($query, $name){
		return $query->where('name','=',$name);
	}

		public function sluggable(){
		return [
			'slug' => [
				'source' => 'name'
			]
		];
	}

}
