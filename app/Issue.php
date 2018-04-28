<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'submitter_telephone',
        'submitter_email',
        'address',
        'image',
    ];
}
