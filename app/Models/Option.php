<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'name',
        'type'
    ];

    //Relación muchos a muchos
    public function products(){
        return $this->belongsToMany(Product::class)
        ->withPivot('value')
        ->withTimestamps();
    }

    //Relación uno a muchos
    public function features(){
        return $this->hasMany(Feature::class);
    }

}
