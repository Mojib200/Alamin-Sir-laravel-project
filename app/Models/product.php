<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    //protected $filable=[];
    //or
    protected $guarded = [];

    //one to one relationship code start
    function relationwithcategorieandproduct()
    {
        return $this->belongsTo(categorie::class, 'product_categorie', 'id');
    }
    //one to one relationship code end
}
