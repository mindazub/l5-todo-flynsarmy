<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	// protected $guarded = [];


	protected $fillable = array('name', 'slug', 'completed', 'description');


	public function project(){
		return $this->belongsTo('App\Project');
	}
}
