<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'family_id'
    ];

    //Relación uno a muchos inversa
    public function fasmily(){
        return $this->belongsTo(Family::class);
    }

    //Relación uno a muchos
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

}
