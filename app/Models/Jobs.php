<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    protected $fillable = [
        'title',
        'started_at',
        'price',
        'id_user',
        'hours',
    ];



}
