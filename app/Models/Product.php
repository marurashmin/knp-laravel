<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'category',
        'description',
    ];
    protected $dates = [ 'created_at', 'updated_at','deleted_at'];
    public function getProductCategory(){
        return $this->hasOne(Category::class,'id','category');
    }
}
