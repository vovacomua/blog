<?php

namespace App;


class Tag extends Model
{
    
	public function posts()

	{

		return $this->belongsToMany(Post::class);

	}

}
