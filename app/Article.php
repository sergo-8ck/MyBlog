<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;



class Article extends Model
{
    //Mass assigned
    protected $fillable = ['title', 'slug', 'date', 'document', 'description', 'published', 'created_by', 'modified_by'];

    //Mutators
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    //Polymorphic relation with categories
    public function categories()
    {
        return $this->morphToMany('App\Category', 'categoryable');
    }

    public function scopeLastArticles($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
    public function scopeSearch($query, $s) {
        return $query->where('title', 'like', '%' .$s. '%')
            ->orWhere('slug', 'like', '%' .$s. '%');
    }

}
