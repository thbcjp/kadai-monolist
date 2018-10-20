<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = ['code', 'name', 'url', 'image_url'];
    
    public function users(){
        return $this->belongsToMany('App\User')->withPivot('type')->withTimestamps();
    }
    
    public function want_users(){
        return $this->users()->where('type', 'want');
    }
}
