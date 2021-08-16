<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'anrede',
        'title',
        'vorname',
        'nachname',
        'suffix',
        'email',
        'date',
        'age',
        'data',
    ];
}
