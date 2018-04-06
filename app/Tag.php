<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    /**
     * Un tag appartient à plusieurs posts
     */
    public function posts(){
        return $this->belongsToMany('App\Post');
    }
}
