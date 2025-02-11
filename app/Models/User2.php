<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    protected $attributes=[
        'name' => 'raihan'
    ];

    protected $table = 'user2s';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
