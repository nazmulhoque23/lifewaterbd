<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function products(){
        $this->hasMany('App\Models\Product', 'category_id');
    }
    
}
