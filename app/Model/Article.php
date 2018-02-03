<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Extension\PublishableTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends BaseModel
{
    use Sluggable, PublishableTrait;

    protected $table = 'articles';

    protected $urlKey = 'slug';

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order',
        'image',
        'name', 
        'writer',
        'description',
        'published'
    ];
    
}
