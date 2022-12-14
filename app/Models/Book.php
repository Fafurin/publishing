<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $table = 'books';

    public $timestamps = false;

    protected $guarded = [];

    public function format()
    {
        return $this->belongsTo(Format::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function outputInformation()
    {
        return $this->belongsTo(OutputInformation::class);
    }

    public function booksFiles()
    {
        return $this->hasMany(BooksFiles::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

}
