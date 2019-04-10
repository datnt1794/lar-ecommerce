<?php

namespace TTSoft\Theme\Entities;

use Illuminate\Database\Eloquent\Model;
class Theme extends Model
{
    protected $table = 'themes';

    protected $primaryKey = 'id';
    
    protected $guarded = [];

    public $timestamps = true;

 
}
