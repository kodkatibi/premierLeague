<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    protected $table = 'teams';
    protected $guarded = [];
    use SoftDeletes;
}
