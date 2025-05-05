<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 */
class Vacancy extends Model
{

    protected $fillable = [
        'created_at',
        'updated_at',
        'start_at',
        'price',
        'title',
        'hours_work',
        'id_user',
    ];
    protected $table = 'post_vacancy';
}
