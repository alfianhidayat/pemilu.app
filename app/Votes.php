<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'votes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'candidate_id'];
}
