<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';
    protected $primarykey = 'id';
    protected $keytype = 'int';
    public $incrementing = true; // public
    public $timestamps = false; //public

    protected $fillable = [
        'name',
        'lat',
        'lng',
        'country'
    ];
}
