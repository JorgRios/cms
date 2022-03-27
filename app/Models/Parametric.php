<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parametric extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'parametrics';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'value',
        'description',
        'group',
        'conector',
        'slug',
    ];

}
