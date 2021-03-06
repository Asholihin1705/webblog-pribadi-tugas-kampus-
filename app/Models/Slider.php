<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Slider extends Model
{
    use HasFactory;

    protected $appends  = ['category'];

    protected $fillable = [
        'title',
        'image',
        'categories_id',
        'order',
        'status',
        'url'
    ];

    public static $rules = [
        'title'         => 'required',
        'image'         => 'required',
        'categories_id' => 'required',
        'order'         => 'required',
        'status'        => 'required',
        'url'           => 'required'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
