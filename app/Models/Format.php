<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Format extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    protected $guarded = [];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
