<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Extension\OrderableTrait;
use App\Model\Extension\PublishableTrait;

class Milestone extends BaseModel
{
    use OrderableTrait, PublishableTrait;

    protected $table = 'milestones';

    protected $urlKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'year',
        'name', 
        'description',
        'published'
    ];
    
}
