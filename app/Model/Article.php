<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Extension\PublishableTrait;

class Article extends BaseModel
{
    use PublishableTrait;

    protected $table = 'articles';

    protected $urlKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order',
        'image',
        'name', 
        'description',
        'published'
    ];
    
}
