<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Article extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'category_id',
    ];
    //
    // public function getUpperTitle()
    // {
    //     dd($this->title);  // Debug title when called

    //     return strtoupper($this->title);
    // }
}
