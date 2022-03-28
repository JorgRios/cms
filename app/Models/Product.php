<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'created_user_id',
        'updated_user_id',
        'deleted_user_id',
        'brand_category_id',
        'name',
        'description',
        'features',
        'price',
    ];
}
