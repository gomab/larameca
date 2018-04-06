<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'online', 'category_id', 'tags_list'];

    /*
     * Un post appartient à une category
     */
    public function category(){
        return $this->belongsTo('App\Category');
    }

    /**
     * Un tag appartient à plusieurs posts
     */
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    /**
     * Organiser tous les tags par id
     * @return mixed
     */
    public function getTagsListAttribute(){
        if($this->id){
            return $this->tags->pluck('id');
        }
    }

    public function  setTagsListAttribute($values){
        return $this->tags()->sync($values) ;
    }

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

    /**
     * getter $title : return le 1er mot des titres des articles en majuscule
     * @param $value
     * @return string
     */
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
        //return strtoupper($value);
    }

    public function setSlugAttribute($value)
    {
        if(empty($value)){
            $this->attributes['slug'] = Str::slug($this->title);
        }
    }

    public function getDates(){
        return ['created_at', 'updated_at', 'published_at'];
    }
}
