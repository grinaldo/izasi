<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Extension\OrderableTrait;
use App\Model\Extension\PublishableTrait;

class Member extends BaseModel
{
    use OrderableTrait, PublishableTrait;

    protected $table = 'members';

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
        'title',
        'description',
        'published'
    ];
    
}
