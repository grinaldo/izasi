<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Extension\OrderableTrait;
use App\Model\Extension\PublishableTrait;

class Vision extends BaseModel
{
    use OrderableTrait, PublishableTrait;

    protected $table = 'visions';

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
        'name_ina', 
        'description_ina',
        'published'
    ];
    
}
