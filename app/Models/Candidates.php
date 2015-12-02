<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'candidates';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['no_urut', 'tagline','ketua','wakil','visi', 'misi', 'photos'];
}
