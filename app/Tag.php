<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = 'blog_tags';
	public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
    ];

	public function TagToPost()
	{
		return $this->belongsTo('PostTag');
	}

}