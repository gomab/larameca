<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'online'];

    /**
     * Scope permettant de récuperer tous les posts online
     * whereRaw() -> pour ecrire la reqete en dur
     */
    public function scopePublished($query){
        return $query->where('online', true)->whereRaw('created_at < NOW()');
    }

    public function scopeSearchByTitle($query, $q){
        return $query->where('title', 'LIKE', '%' .$q. '%');
}
}
