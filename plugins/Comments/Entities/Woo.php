<?php

namespace Plugin\Comments\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Woo extends Model
{
    use SoftDeletes;

    protected $table = 'woo';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $guarded = [];

    public $timestamps = true;

 
}
