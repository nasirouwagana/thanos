<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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

    public function setImageAttribute($image)
    {
        if ($image instanceof UploadedFile && $image->isValid()) {
            $imageName = date('YmdHis') . '_' . str_slug($this->title);
            $image->storeAs('issues', $imageName);
            $this->attributes['image'] = $imageName;
        }
    }
}
