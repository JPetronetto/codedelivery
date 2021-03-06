<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'name'
    ];


    /*==================================================
    Criando o relacionamento com Product
    ==================================================*/
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
