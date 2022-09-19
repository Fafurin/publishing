<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function task()
    {
        return $this->hasOne(Task::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

}
