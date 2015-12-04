<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nim', 'nama','kelas','angkatan'];
}
